<?php

class DepartmentController extends \BaseController {

	
	public function show($key)
	{
		
		$dept = Department::where('key',$key)->first();

		return View::make('department.show')
				->with('title',$dept->name)
				->with('dept',$dept);
	}	

	
}