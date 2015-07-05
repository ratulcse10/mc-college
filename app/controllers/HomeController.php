<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$principal_message = Message::where('designation','principal')->first();
		$viceprincipal_message = Message::where('designation','vice-principal')->first();

		return View::make('home.index')
				->with('notices',DB::table('notices')->orderBy('id', 'asc')->take(3)->get())
				->with('events',DB::table('events')->orderBy('id', 'asc')->take(5)->get())
				->with('principal_message',$principal_message)
				->with('viceprincipal_message',$viceprincipal_message);
	}

}
