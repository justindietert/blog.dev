@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog &mdash; {{{ $post->title }}}</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's blog">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="blog-single-post">
            <div class="inner">
                <hr class="top">
                <h6 class="time"> {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ g:i A') }}} </h6>
                <h2>{{{ $post->title }}}</h2>
                <p>{{{ $post->body }}}</p>
                <a href="{{{ action('PostsController@edit', $post->id) }}}" class="edit-post"><i class="fa fa-pencil"></i>&nbsp;Edit post</a>

                {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id])) }}
                    <button type="submit" class="delete-post"><i class="fa fa-times-circle-o"></i>&nbsp;Delete post</button>
                {{ Form::close() }}
            </div>
        </div>
@stop
