<?php

class HolidayCalendarController extends \BaseController {
	public function show()
	{
		$holiday = Holiday_calendar::find(1);
		return View::make('holiday.index')
        		->with('title',"Holiday Calendar")
        		->with('holiday',$holiday);
	}

}