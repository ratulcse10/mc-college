<?php

class EventController extends \BaseController {

	
	public function index()
	{
		 return View::make('events.index')
        	->with('title',"Events")
        	->with('events',AllEvent::where('published_at','=','central')->paginate(10));
	}


	public function show($id)
	{
		try{
		 	$event = AllEvent::findOrFail($id);
		 	 return View::make('events.show')
	        	->with('title',$event->title)
	        	->with('event',$event);
		 }
		 catch(Exception $ex){
		 	return Redirect::route('event.index');

		 }
	}

	
}