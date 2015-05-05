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

                    <label for="email">
                        @if($errors->has('email'))
                            Email <span class="inline-error">&mdash; {{ $errors->first('email') }}</span>
                        @else
                            Email
                        @endif
                    </label>
                    {{ Form::text('email', Input::old('email'), ['id' => 'email']) }}

                    <label for="password">
                        @if($errors->has('password'))
                            Password <span class="inline-error">&mdash; {{ $errors->first('password') }}</span>
                        @else
                            Password
                        @endif
                    </label>
                    {{ Form::password('password', Input::old('password'), ['id' => 'password']) }}

                    <input type="submit" class="button tiny radius" value="Enter">

                {{ Form::close() }}

            </div>
        </div>
@stop
