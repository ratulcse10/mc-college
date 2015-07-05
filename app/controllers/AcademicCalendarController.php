<?php

class AcademicCalendarController extends \BaseController {

	public function show()
	{
		$academic = Academic_calendar::find(1);
		return View::make('academic.index')
        		->with('title',"Academic Calendar")
        		->with('academic',$academic);
	}

}