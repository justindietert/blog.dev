<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter( 'auth', ['except' => ['index', 'show']] );
		// Call the parent constructor for CSRF token
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->orderBy('id', 'desc')->simplePaginate(4);
		$data = ['posts' => $posts];
		return View::make('posts.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails())
	    {
	    	Session::flash('errorMessage', 'Post not saved. See errors below.');
	    	Log::info('Invalid user inputs from create view. Logged below:');
	    	Log::info(Input::all());
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);

	    }
	    else
	    {
	        // validation succeeded, create and save the post
			$post = new Post;
			$post->title    = Input::get('title');
			$post->slug     = Input::get('title');
			$post->body     = Input::get('body');
			$post->user_id  = Auth::id();
			$post->save();
			Session::flash('successMessage', 'Post successfully saved.');
			return Redirect::action('PostsController@index');
	    }

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = null;

	    try {
	        if(is_numeric($id)) {
	        	$post = Post::findOrFail($id);
	        } else {
		        $post = Post::where('slug', '=', $id)->firstOrFail();
	        }

	        $older = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
	        $newer = Post::where('id', '>', $post->id)->first();

	        $data = [
	        	'post'  => $post,
	        	'older' => $older,
	        	'newer' => $newer
        	];

			return View::make('posts.show')->with($data);

	    } catch(Exception $e) {
	    	Log::info('Page not found. See below:');
	    	Log::error($e);
	    	App::abort(404);
	    }
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {

			if(is_numeric($id)) {
	        	$post = Post::findOrFail($id);
	        } else {
		        $post = Post::where('slug', '=', $id)->firstOrFail();
	        }

			$data = ['post' => $post];

			return View::make('posts.edit')->with($data);

		} catch(Exception $e) {
			Log::info('Page not found. See below:');
	    	Log::error($e);
	    	App::abort(404);
		}

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {

	    	Session::flash('errorMessage', 'Post not saved. See errors below.');
	    	Log::info('Invalid user inputs from edit view. Logged below:');
	    	Log::info(Input::all());
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {
	        // validation succeeded, create and save the post
			$post = Post::findOrFail($id);
			$post->title = Input::get('title');
			$post->slug = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			$older = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
	        $newer = Post::where('id', '>', $post->id)->first();

	        $data = [
	        	'post'  => $post,
	        	'older' => $older,
	        	'newer' => $newer
	        ];

			Session::flash('successMessage', 'Post successfully updated.');

			return View::make('posts.show')->with($data);
	    }

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();

		Session::flash('successMessage', 'Post successfully deleted.');

		return Redirect::action('PostsController@index');
	}


}
