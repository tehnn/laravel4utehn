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
/*
Route::get('/', function()
{
	return View::make('test.test');
});
 
 */
Route::get('/', 'HomeController@index');
Route::get('tehn','HomeController@tehnn');
Route::get('show','MyController@show');
Route::get('show2','MyController@show2');
Route::any('post','MyController@showpost');


