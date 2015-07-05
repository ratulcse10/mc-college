<?php

class LibraryController extends \BaseController {

	
	public function show()
	{
		$library = Library::find(1);
		return View::make('library.index')
        		->with('title',"Library")
        		->with('library',$library);
	}

	

}