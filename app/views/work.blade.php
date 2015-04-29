@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Work</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's portfolio">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li class="active"><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main">
            <div class="inner">
                <div class="row">
                    <div class="col one">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col two">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col three">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col one">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col two">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col three">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col one">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col two">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                    <div class="col three">
                        <img src="http://placehold.it/400x400" alt="">
                    </div>
                </div>
            </div>
        </div>
@stop