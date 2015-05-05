@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Log in</title>
@stop

@section('description')
    <meta name="description" content="Log in.">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="login">
            <div class="inner">

                <hr class="top">

                <h5>Log in</h5>
                {{ Form::open(array('action' => 'HomeController@doLogin')) }}

                    {{ Form::label('email_or_username', 'Email or Username') }}
                    {{ Form::text('email_or_username', Input::old('email_or_username')) }}

                    {{ Form::label('password', 'password') }}
                    {{ Form::password('password') }}

                    <input type="submit" class="button tiny radius" value="Enter">

                {{ Form::close() }}

            </div>
        </div>
@stop
