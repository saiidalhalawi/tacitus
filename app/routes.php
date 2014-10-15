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

// Admin
Route::group(array('prefix' => 'admin'), function()
{
	Route::any('/people', 'PeopleController@index');
});
