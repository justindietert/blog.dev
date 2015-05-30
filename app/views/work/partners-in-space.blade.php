@extends('layouts.master')

@section('title')
    <title>Partners in Space | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Partners in Space">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work-show">
            <div class="inner full">
                <img src="/img/work/spreads/space_spread.jpg" alt="Partners in Space magazine spread">
            </div>
            <div class="inner full">
                <h2>Partners in Space</h2>
            </div>
        </div>
@stop
