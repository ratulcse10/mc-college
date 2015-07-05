<?php

class ResultController extends \BaseController {

	
	public function index()
	{
		return View::make('results.index')
        	->with('title',"Results")
        	->with('results',Result::paginate(2));
	}

	
	public function show($id)
	{
		try{
		 	$result = Result::findOrFail($id);
		 	 return View::make('results.show')
	        	->with('title',$result->title)
	        	->with('result',$result);
		 }
		 catch(Exception $ex){
		 	return Redirect::route('result.index');

		 }
	}

	

}