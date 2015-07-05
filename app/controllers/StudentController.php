<?php

class StudentController extends \BaseController {

	public function show()
	{
		$student = Student_info::find(1);
		return View::make('student.index')
        		->with('title',"Students Information")
        		->with('student',$student);
	}

}