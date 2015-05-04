@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog &mdash; Post not found</title>
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
        <div role="main" class="main" id="blog-all-posts">
            <div class="inner">
                <hr class="top">
                <h2>404: Post not found.</h2>
                <p><a href="{{{ action('PostsController@index') }}}" class="edit-post"><i class="fa fa-arrow-circle-left"></i> All posts</a></p>
            </div>
        </div>
@stop
