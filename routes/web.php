<?php

// resources routes
Route::resource('headers','HeaderController')->only(['edit','update']);
Route::resource('footers','FooterController')->only(['edit','update']);

Route::get('/','IndexController@main');
Route::post('message','IndexController@store_message');
Route::get('messages','MessageController@index');
Route::get('messages/delete/{message}','MessageController@destroy');
Route::resource('sections', 'SectionController')->except(['index', 'show']);
Route::get('sections/visibility/{section}', 'SectionController@visibility');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
