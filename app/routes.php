<?php

Route::get('/', function(){
	return View::make('pages.home')
				->with('title',"Home");
});
Route::get('home', function(){
    return View::make('pages.home')
        ->with('title',"Home");
});

Route::get('contact', function(){
    return View::make('pages.contact')
        ->with('title',"Contact");
});
Route::get('news', function(){
    return View::make('pages.news')
        ->with('title',"News");
});
Route::get('events', function(){
    return View::make('pages.events')
        ->with('title',"Events");
});