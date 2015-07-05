<?php

class HostelController extends \BaseController {

	
	public function show()
	{
		$hostel = Hostel::find(1);
		return View::make('hostel.index')
        		->with('title',"Hostel")
        		->with('hostel',$hostel);
	}

	
}