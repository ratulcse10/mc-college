<?php

class AdmissionController extends \BaseController {

	
	public function index()
	{
		return View::make('admission.index')
        	->with('title',"Admission");
	}

	
	public function show($id)
	{
		try{
		 	$admission = Admission::findOrFail($id);
		 	 return View::make('admission.show')
	        	->with('title',$admission->title)
	        	->with('admission',$admission);
		 }
		 catch(Exception $ex){
		 	return Redirect::route('admission.index');

		 }
	}

	public function pin(){
		return View::make('admission.pin')
        	->with('title',"Admission Authentication");

	}

	public function pinProcess(){

		$rules = [
					'code' => 'required|size:13'
		];
		$messages = array(
				    'code.required' => 'You must have to enter Pin',
				    'code.size' => 'Pin must have to be 13 Digits',
		);

		$data = Input::all();

		$validator = Validator::make($data,$rules,$messages);
		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else{

			try {
				$pin = Pin::where('code','=',$data['code'])->where('used','=',0)->firstOrFail();
				$gender = [
					''      => '--select--',
					'male' => 'Male',
					'female'   => 'Female',
					'other'   => 'Other'
				];

				$departments_hsc = [
						''      => '--select--',
						'science' => 'Science',
						'business'   => 'Business',
						'humanities'   => 'Humanities'
				];

				$course = [
						''      => '--select--',
						'hsc' => 'HSC',
						'honors'   => 'Honors',
						'masters'   => 'Masters'
				];

				$departments = Department::all()->lists('key','id');

				return View::make('admission.admit')
					->with('gender',$gender)
					->with('code',$data['code'])
					->with('departments_hsc',$departments_hsc)
					->with('departments',$departments)
					->with('course',$course)
	        		->with('title','Admission Form');
			}
			catch (Exception $e){
				return Redirect::back()->with('error',"Wrong/Used Pin Code, Please check and Try Again");
			}

		}
	}

	public function admit(){
		$rules = [

					'name'       => 'required',
					'name_bn'       => 'required',
					'father_name'       => 'required',
					'father_name_bn'       => 'required',
					'mother_name'       => 'required',
					'mother_name_bn'       => 'required',
					'mobile'       => 'required',
					'parent_mobile'       => 'required',
					'email'       => 'required',
					'date_of_birth'       => 'required',
					'religion'       => 'required',
					'nationality'       => 'required',
					'present'       => 'required',
					'permanent'       => 'required',
					'ssc_board'       => 'required',
					'ssc_passing_year'       => 'required',
					'ssc_group'       => 'required',
					'ssc_result'       => 'required',
					'gender'     => 'required',
					'current_course'	=> 'required'

		];

		$departments_hsc = [
						''      => '--select--',
						'science' => 'Science',
						'business'   => 'Business',
						'humanities'   => 'Humanities'
		];

		$gender = [
					''      => '--select--',
					'male' => 'Male',
					'female'   => 'Female',
					'other'   => 'Other'
				];

		$departments = Department::all()->lists('key','id');

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::route('admission.index')->with('error',"Your previous request is invalid, please try again with same PIN");
		}
		else{
			$student = new Student_info();

			$student->name = $data['name'];
			$student->name_bn = $data['name_bn'];
			$student->father_name = $data['father_name'];
			$student->father_name_bn = $data['father_name_bn'];
			$student->mother_name = $data['mother_name'];
			$student->mother_name_bn = $data['mother_name_bn'];
			$student->mobile = $data['mobile'];
			$student->parent_mobile = $data['parent_mobile'];
			$student->email = $data['email'];
			$student->date_of_birth = $data['date_of_birth'];
			$student->religion = $data['religion'];
			$student->nationality = $data['nationality'];
			$student->gender = $gender[$data['gender']];
			$student->present = $data['present'];
			$student->permanent = $data['permanent'];
			$student->ssc_board = $data['ssc_board'];
			$student->ssc_passing_year = $data['ssc_passing_year'];
			$student->ssc_group = $data['ssc_group'];
			$student->ssc_result = $data['ssc_result'];


			$student->hsc_board = $data['hsc_board'];
			$student->hsc_passing_year = $data['hsc_passing_year'];
			$student->hsc_group = $data['hsc_group'];
			$student->hsc_result = $data['hsc_result'];

			$student->bachelor_univ = $data['bachelor_univ'];
			$student->bachelor_passing_year = $data['bachelor_passing_year'];
			$student->bachelor_subject = $data['bachelor_subject'];
			$student->bachelor_result = $data['bachelor_result'];

			$student->bachelor_honors_univ = $data['bachelor_honors_univ'];
			$student->bachelor_honors_passing_year = $data['bachelor_honors_passing_year'];
			$student->bachelor_honors_subject = $data['bachelor_honors_subject'];
			$student->bachelor_honors_result = $data['bachelor_honors_result'];

			$student->masters_univ = $data['masters_univ'];
			$student->masters_passing_year = $data['masters_passing_year'];
			$student->masters_subject = $data['masters_subject'];
			$student->masters_result = $data['masters_result'];



			$student->programme = $data['current_course'];

			if($data['current_course']=="honors"||$data['current_course']=="masters"){
				$student->department = $departments[$data['current_dept']];
			}
			elseif($data['current_course']=="hsc"){
				$student->department = $data['current_dept_hsc'];
			}
					

			if($student->save()){
				try{
					$pin = Pin::where('code','=',$data['code'])->where('used','=',0)->firstOrFail();
					$pin->used = 1;

					if($pin->save()){
						return Redirect::route('admission.index')->with('success',"Your Registration is Successful !!!");
					}
					else{
						return Redirect::route('admission.index')->with('error',"Something went wrong.Try again");
					}
				}
				catch(Exception $e){
					return Redirect::route('admission.index')->with('error',"Something went wrong.Try again");
				}
			}else{
				return Redirect::route('admission.index')->with('error',"Something went wrong.Try again");
			}
		}
	}

	
}