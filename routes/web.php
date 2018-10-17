<?php

// resources routes
Route::resource('headers','HeaderController')->only(['edit','update']);
Route::resource('footers','FooterController')->only(['edit','update']);

Route::get('/','IndexController@main');
Route::post('message','IndexController@store_message');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
