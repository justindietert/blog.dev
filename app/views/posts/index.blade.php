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
        <div role="main" class="main" id="blog">
            <div class="inner">
                @foreach($posts as $post)
                    <hr class="top">
                    <h6 class="time">{{{ $post->created_at }}} | {{{ $post->user->username }}}</h6>
                    <h2><a href="{{{ action('PostsController@show', $post->slug) }}}">{{{ $post->title }}}</a></h2>
                    <p>{{{ $post->body }}}</p>
                    <p class="circle"><a href="{{{ action('PostsController@show', $post->slug) }}}"><i class="fa fa-circle-o"></i></a></p>
                @endforeach

                <div class="pag">
                    {{ $posts->links('pagination::simple') }}
                </div>
            </div>
        </div>
@stop
