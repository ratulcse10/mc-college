<?php

class PrincipalInfoController extends \BaseController {

	
	public function index()
	{
		$principal = Principal_info::find(1);
		return View::make('principal.index')
        		->with('title',"Principal's Information")
        		->with('principal',$principal);
	}

	

}