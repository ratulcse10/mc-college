<?php

Route::get('/', function(){
	return View::make('pages.home')
				->with('title',"Home");

});


