<?php

// resources routes
Route::resource('headers','HeaderController')->only(['edit','update']);

// laravel auth routes
Route::get('/','IndexController@main');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
