@extends('layouts.master')

@section('title')
    <title>Log in | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Log in.">
@stop

@section('nav-active')
    <li><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="login">
            <div class="inner">

                <hr class="top">

                <h2 class="typl8-epsilon">Log in</h2>
                {{ Form::open(array('action' => 'HomeController@doLogin')) }}

                    {{ Form::label('email_or_username', 'Email or Username') }}
                    {{ Form::text('email_or_username', Input::old('email_or_username')) }}

                    {{ Form::label('password', 'password') }}
                    {{ Form::password('password') }}

                    {{ Form::submit('Enter', ['class' => 'button tiny radius']) }}

                {{ Form::close() }}

            </div>
        </div>
@stop
