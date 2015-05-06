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
	// 	$this->beforeFilter( 'auth', array('except' => array('create', 'edit')) );
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


	public function login()
	{
		return View::make('login');
	}


	public function doLogin()
	{

		$emailOrUsername = Input::get('email_or_username');
		$password        = Input::get('password');

		if (Auth::attempt(array('email' => $emailOrUsername, 'password' => $password))
			|| (Auth::attempt(array('username' => $emailOrUsername, 'password' => $password))))
		{
			Session::flash('successMessage', 'Logged in successfully.');
		    return Redirect::intended();
		}
		else
		{
		    // session flash message: login failed
		    Session::flash('errorMessage', 'Log in failed. Please try again.');
		    // login failed, go back to the login screen
		    return Redirect::action('HomeController@login')->withInput();
		}

	}


	public function logout()
	{
		Auth::logout();

		Session::flash('successMessage', 'Logged out successfully.');

		return Redirect::action('HomeController@showHome');
	}


}
