@extends('layouts.master')

@section('title')
    <title>Justin Dietert | 404: Page not found.</title>
@stop

@section('description')
    <meta name="description" content="404: Page not found.">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="not-found">
            <div class="inner">
                <hr class="top">
                <h2>404: Page not found.</h2>
                <p><a href="{{{ action('HomeController@showHome') }}}" class="edit-post"><i class="fa fa-arrow-circle-left"></i> Go home</a></p>
            </div>
        </div>
@stop
