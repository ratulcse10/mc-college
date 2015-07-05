<?php

class ClassRoutineController extends \BaseController {

	public function show()
	{
		$routine = Class_routine::find(1);
		return View::make('routine.index')
        		->with('title',"Class Routine")
        		->with('routine',$routine);
	}
}