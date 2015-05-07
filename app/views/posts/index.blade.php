@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog</title>
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
        <div role="main" class="main" id="blog">
            <div class="inner">
                {{ Form::open(array('action' => array('PostsController@index'), 'method' => 'GET')) }}
                    <div class="row">
                        <div class="col search-field">
                            {{ Form::text('search', null, ['class' => 'postfix']) }}
                        </div>
                        <div class="col search-button">
                            {{ Form::submit('Search', ['class' => 'button tiny postfix']) }}
                        </div>
                    </div>
                {{ Form::close() }}

                @foreach($posts as $post)
                    <hr class="top">
                    <h6 class="time"><span class="user">{{{ $post->user->username }}}</span> | {{{ $post->created_at }}}</h6>
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
