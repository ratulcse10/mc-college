<?php

class MessageController extends \BaseController {

	
	public function index($designation)
	{
		try{
			$message = Message::where('designation',$designation)->first();

			return View::make('message.index')
						->with('message',$message);
		}catch (Exception $ex){
			return Redirect::back()->with('error',"Something went wrong.Try again");
		}
	}

	

}