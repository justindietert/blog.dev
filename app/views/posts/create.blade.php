@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog – Create Post</title>
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
        <div role="main" class="main" id="blog-create-post">
            <div class="inner">
                <h2>Create new post</h2>
                <form action="{{{ action('PostsController@store') }}}" method="POST">
                    <label for="title">
                        @if($errors->has('title'))
                            Title <span class="inline-error">&mdash; {{ $errors->first('title') }}</span>
                        @else
                            Title
                        @endif
                    </label>
                    <input type="text" name="title" id="title" value="{{{ Input::old('title') }}}">

                    <label for="body">
                        @if($errors->has('body'))
                            Body <span class="inline-error">&mdash; {{ $errors->first('body') }}</span>
                        @else 
                            Body
                        @endif
                    </label>
                    <textarea name="body" id="body" cols="30" rows="10">{{{ Input::old('body') }}}</textarea>

                    <input type="submit" class="button tiny radius">
                </form>
            </div>
        </div>
@stop

