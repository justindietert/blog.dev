@extends('layouts.master')

@section('title')
    <title>Whack-a-Mole! | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Whack-a-Mole!">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work-show">
            <div class="inner">
                <h2>Whack-a-Mole!</h2>
                <p>
                    <a href="{{{ action('WorkController@whackPlay') }}}" target="_blank" class="edit-post">Play now &rarr;</a>
                </p>
            </div>
        </div>
@stop
