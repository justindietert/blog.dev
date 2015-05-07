@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Work &mdash; Whack-a-Mole!</title>
@stop

@section('description')
    <meta name="description" content="Whack-a-Mole!">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work-show">
            <div class="inner">
                <h2>Whack-a-Mole!</h2>
            </div>
        </div>
@stop
