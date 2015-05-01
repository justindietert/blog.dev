@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Home</title>
@stop

@section('description')
    <meta name="description" content="Graphic design and web development">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main">
            <div class="inner">
        <hr class="top">
                <h2>Home</h2>

            </div>
        </div>
@stop
