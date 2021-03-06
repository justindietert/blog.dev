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

Route::get('resume', 'HomeController@showResume');

Route::get('resume/download', 'HomeController@downloadResume');


Route::group(['prefix' => 'blog'], function()
{
    Route::resource('posts', 'PostsController');
});


Route::get('login', 'HomeController@login');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@logout');


Route::resource('work', 'WorkController', array('only' => array('index', 'show')));

Route::get('whack-play', 'HomeController@whackPlay');
Route::get('simon-play', 'HomeController@simonPlay');
