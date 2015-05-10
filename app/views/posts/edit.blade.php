@extends('layouts.master')

@section('title')
    <title>Blog &mdash; Edit Post | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's blog">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li class="active"><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="blog-edit-post">
            <div class="inner">
                <hr class="top">
                <h6 class="time">Last update: {{{ $post->updated_at }}}</h6>
                <h2>Edit post: {{{ $post->id }}} </h2>
                {{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

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

                    <input type="submit" class="button tiny radius" value="Update">
                    <a href="{{{ action('PostsController@show', $post->slug) }}}" class="button tiny radius cancel">Cancel</a>
                {{ Form::close() }}

            </div>
        </div>
@stop
