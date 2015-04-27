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
	return View::make('hello');
});

Route::get('/resume', function()
{
    return 'This is my resume.';
});

Route::get('/portfolio', function()
{
    return 'This is my portfolio.';
});

Route::get('/rolldice/{guess}', function($guess)
{
    // Get a random number between 1 and 6.
    $random = rand(1, 6);

    // Display appropriate message to user.
    if ($random == $guess) {
        $message = 'Correct!';
    } else {
        $message = 'Wrong!';
    }

    $data   = array(
        'random'  => $random,
        'guess'   => $guess,
        'message' => $message
    );

    return View::make('roll-dice')->with($data);
});