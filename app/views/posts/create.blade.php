@extends('layouts.master')

@section('title')
    <title>Blog &mdash; Create Post | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's blog">
@stop

@section('nav-active')
    <li><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="blog-create-post">
            <div class="inner">
                <hr class="top">
                <h2>Create new post</h2>
                {{ Form::open(array('action' => 'PostsController@store')) }}

                    <label for="title">
                        @if($errors->has('title'))
                            Title <span class="inline-error">&mdash; {{ $errors->first('title') }}</span>
                        @else
                            Title
                        @endif
                    </label>
                    {{ Form::text('title', Input::old('title'), ['id' => 'title']) }}

                    <label for="body">
                        @if($errors->has('body'))
                            Body <span class="inline-error">&mdash; {{ $errors->first('body') }}</span>
                        @else
                            Body
                        @endif
                    </label>
                    {{ Form::textarea('body', Input::old('body'), ['id' => 'body']) }}

                    <input type="submit" class="button tiny radius" value="Post">

                {{ Form::close() }}
            </div>
        </div>
@stop

