<?php

class AboutController extends \BaseController {


	
	public function show()
	{
		$about = About::find(1);
		return View::make('about.index')
        		->with('title',"About Us")
        		->with('about',$about);
	}

	

}