<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
	return view('pages.home');
});

Route::get('home', function()
{
	return view('pages.home');
});

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('comedy', function()
{
	return view('pages.comedy');
});

Route::get('football', function()
{
	return view('pages.football');
});

Route::get('projects', function()
{
	return view('pages.projects');
});

Route::get('resume', function()
{
	return view('pages.resume');
});

Route::get('personal', function()
{
	return view('pages.personal');
});

Route::get('art', function()
{
	return view('pages.art');
});

Route::get('peg_game', function()
{
	return view('pages.projects.peg_game');
});



