@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog &mdash; Edit Post</title>
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
        <div role="main" class="main" id="blog-edit-post">
            <div class="inner">
                <h2>Edit post: {{{ $post->id }}} </h2>
                {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

                    <label for="title">
                        @if($errors->has('title'))
                            Title <span class="inline-error">&mdash; {{ $errors->first('title') }}</span>
                        @else
                            Title
                        @endif
                    </label>
                    {{ Form::text('title', Input::old('title')) }}

                    <label for="body">
                        @if($errors->has('body'))
                            Body <span class="inline-error">&mdash; {{ $errors->first('body') }}</span>
                        @else
                            Body
                        @endif
                    </label>
                    {{ Form::textarea('body', Input::old('body')) }}

                    <input type="submit" class="button tiny radius" value="Update">

                {{ Form::close() }}
            </div>
        </div>
@stop

