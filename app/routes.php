<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// 画面アクション
Route::get('/', 'TopController@index');
Route::get('/timeline', 'TimelineController@index');

// REST
Route::any('/rest/{lang}/search/people', 'SearchController@people');


// Admin
Route::group(array('prefix' => 'admin'), function()
{
	Route::resource('people', 'PeopleController');
});
