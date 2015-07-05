<?php

class TeacherController extends \BaseController {

	
	public function index()
	{
		return View::make('teachers.index')
				->with('title',"Teachers Information")
				->with('departments',Department::all());
	}

	
	public function show($id)
	{
		try{
			$teacher = Teacher::with('department')->findOrFail($id);


			return View::make('teachers.show')
				->with('title',$teacher->name)
				->with('teacher',$teacher);
		}
		catch(Exception $ex){
			return Redirect::route('teacher.index');
		}
		
	}

	

}