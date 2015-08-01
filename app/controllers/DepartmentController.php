<?php

class DepartmentController extends \BaseController {

	
	public function show($key)
	{
		
		$dept = Department::where('key',$key)->first();

		return View::make('department.show')
				->with('title',$dept->name)
				->with('notices',Notice::where('published_at','=','dept')->where('dept_id','=',$dept->id)->get())
				->with('events',AllEvent::where('published_at','=','dept')->where('dept_id','=',$dept->id)->get())
				->with('results',Result::where('published_at','=','dept')->where('dept_id','=',$dept->id)->get())
				->with('students',Student_info::where('department','=',$dept->key)->get())
				->with('dept',$dept);
	}	

	
}