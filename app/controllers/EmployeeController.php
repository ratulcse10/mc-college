<?php

class EmployeeController extends \BaseController {

	
	public function show()
	{
		$fourth_class = Fourth_class::find(1);
		return View::make('employee.index')
        		->with('title',"3rd & 4th Class Employee Information")
        		->with('employee',$fourth_class);
	}

	

}