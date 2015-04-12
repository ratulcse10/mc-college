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
Route::get('notices', function(){
    return View::make('pages.news')
        ->with('title',"Notices");
});
Route::get('events', function(){
    return View::make('pages.events')
        ->with('title',"Events");
});

Route::get('about', function(){
    return View::make('pages.about')
        ->with('title',"About");
});

Route::get('result', function(){
    return View::make('pages.result.home')
        ->with('title',"Result");
});

Route::get('admission', function(){
    return View::make('pages.admission.home')
        ->with('title',"Admission");
});

Route::get('teachers', function(){
    return View::make('pages.teachers.home')
        ->with('title',"Teachers Information");
});