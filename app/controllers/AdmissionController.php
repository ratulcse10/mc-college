<?php

class AdmissionController extends \BaseController {

	
	public function index()
	{
		return View::make('admission.index')
        	->with('title',"Admission")
        	->with('admissions',Admission::paginate(2));
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

	
}