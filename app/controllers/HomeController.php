<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function __construct()
	// {
	// 	$this->beforeFilter( 'auth', array('only' => array('create', 'edit')) );
	// }

	public function showHome()
	{
		return View::make('home');
	}


	public function showWork()
	{
		return View::make('work');
	}


	public function showAbout()
	{
		return View::make('about');
	}


	public function showResume()
	{
		return View::make('resume');
	}

	// public function showLogin()
	// {
	// 	// return view for login form
	// }

	// public function checkLogin()
	// {
	// 	// need to add validation
	// 	$email     = Input::get('email');
	// 	$password  = Input::get('password');

	// 	if (Auth::attempt(array('email' => $email, 'password' => $password))) {
	// 	    return Redirect::intended('/');
	// 	} else {
	// 	    // login failed, go back to the login screen
	// 	    // session flash message: login failed
	// 	}
	// }

	// public function logout()
	// {
	// 	Auth::logout();
	// }
}
