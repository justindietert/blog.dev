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

Route::get('/', 'HomeController@showHome');

Route::get('about', 'HomeController@showAbout');

Route::get('resume', 'HomeController@showResume');


Route::group(['prefix' => 'blog'], function()
{
    Route::resource('posts', 'PostsController');
});


Route::get('login', 'HomeController@login');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@logout');


Route::get('work', 'WorkController@index');

Route::group(['prefix' => 'work'], function()
{
    Route::get('whack-a-mole', 'WorkController@whackamole');
    Route::get('simple-simon', 'WorkController@simpleSimon');
});
