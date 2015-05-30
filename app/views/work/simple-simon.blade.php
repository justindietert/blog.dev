@extends('layouts.master')

@section('title')
    <title>Simple Simon | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Simple Simon">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work-show">
            <div class="inner">
                <h2>Simple Simon</h2>
            </div>
        </div>
@stop
