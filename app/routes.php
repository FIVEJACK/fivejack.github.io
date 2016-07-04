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

Route::filter('ip_block_for_beta', function()
{
	if (App::environment() === 'beta_outside' )
    {
		//    	even in beta, there are some exception pages that people can see
    	//if ($_SERVER['REQUEST_URI'] === '/launcher')
    	//{
			
		//}
		//else
		{
        	App::abort(404);
		}
    }
});

Route::when('*', 'ip_block_for_beta');

Route::get('/', 'HomeController@showHome');
Route::get('/career/{position}', 'HomeController@showCareer');
Route::get('/announcement', function ()
{
	return View::make('announcement');
});