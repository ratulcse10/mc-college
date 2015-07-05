<?php

class VicePrincipalInfoController extends \BaseController {

	
	public function index()
	{
		$vice_principal = Vice_principal_info::find(1);
		return View::make('viceprincipal.index')
        		->with('title',"Vice Principal's Information")
        		->with('vice_principal',$vice_principal);
	}

	
}