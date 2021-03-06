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

/* 画面アクション */

// TOPページ
Route::get('/', array('as' => 'home', 'uses' => 'TopController@index'));
// メインページ
Route::get('/timeline', 'TimelineController@index');
// ABOUTページ
Route::get('about', 'PagesController@about');

/* REST */
Route::any('/rest/{lang}/search/people', 'SearchController@people');


/* Admin */
Route::group(array('prefix' => 'admin'), function()
{
	Route::resource('people', 'PeopleController');
	Route::resource('event', 'EventController');
	Route::resource('state', 'StateController');
	Route::resource('invention', 'InventionController');
});
