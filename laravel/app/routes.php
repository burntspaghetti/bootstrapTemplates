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

Route::get('/', function()
{
//	$image = Image::make(public_path() . '/images/mtn.jpg')->response('jpg');
//	return $image;


	return View::make('home', compact('image'));
});

Route::get('/test', function()
{
	return View::make('test');
});

Route::get('/testing', function()
{
	return View::make('test2');
});


