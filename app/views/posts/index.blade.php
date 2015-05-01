@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog</title>
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
                @foreach($posts as $post)
                    <h2>{{{ $post->title }}}</h2>
                    <p>{{{ $post->body }}}</p>
                @endforeach

                <hr>

                <div class="pag">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
@stop
