<?php

// resources routes

Route::get('/','IndexController@main');
Route::post('message','IndexController@store_message');
Route::get('messages','MessageController@index');
Route::get('messages/delete/{message}','MessageController@destroy');
Route::get('sections/visibility/{section}', 'SectionController@visibility');
Route::get('contents/{section}', 'ContentController@edit');
Route::post('contents/{section}', 'ContentController@update');
Route::get('menu', 'MenuController@edit');
Route::post('menu', 'MenuController@update');

Route::resource('headers','HeaderController')->only(['edit','update']);
Route::resource('footers','FooterController')->only(['edit','update']);
Route::resource('sections', 'SectionController')->except(['index', 'show']);



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
