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
                {{-- <hr class="top"> --}}
                <p class="intro">Justin Dietert is a designer and developer with an eye for clean design, thoughtful user interfaces, and engaging user experiences.</p>
            </div>
        </div>
@stop
