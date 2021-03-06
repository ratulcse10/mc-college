<?php

class NoticeController extends \BaseController {

	
	public function index()
	{
		 return View::make('notices.index')
        	->with('title',"Notices")
        	->with('notices',Notice::where('published_at','=','central')->paginate(10));
	}

	
	public function show($id)
	{
		 try{
		 	$notice = Notice::findOrFail($id);
		 	 return View::make('notices.show')
	        	->with('title',$notice->title)
	        	->with('notice',$notice);
		 }
		 catch(Exception $ex){
		 	return Redirect::route('notice.index');

		 }
		
	}


}