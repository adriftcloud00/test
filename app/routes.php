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

Route::get('/', function() {
	return View::make('hello');
});

Route::get('test/one', 'TestController@one');
Route::get('test/two', 'TestController@two');
Route::get('test/post/{id}', 'TestController@post');
