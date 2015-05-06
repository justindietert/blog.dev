@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Blog &mdash; {{{ $post->title }}}</title>
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
        <div role="main" class="main" id="blog-show">
            <div class="inner">
                <hr class="top">
                <h6 class="time"><span class="user">{{{ $post->user->username }}}</span> | {{{ $post->created_at }}}</h6>
                <h2>{{{ $post->title }}}</h2>
                <p>{{{ $post->body }}}</p>

                @if(Auth::check())
                    <a href="{{{ action('PostsController@edit', $post->slug) }}}" class="edit-post"><i class="fa fa-pencil"></i>&nbsp;Edit post</a>

                    {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id])) }}
                        <button type="submit" class="delete-post"><i class="fa fa-times-circle-o"></i>&nbsp;Delete post</button>
                    {{ Form::close() }}
                @else
                    <p class="circle"><i class="fa fa-circle-o"></i></p>
                @endif

                <div class="blog-nav clearfix">
                    <div class="left clearfix">
                        @if($post->id === $post->min('id'))
                            <a href="{{{ action('PostsController@index') }}}"><i class="fa fa-circle-o blue"></i> All Posts</a>
                        @else
                            <a href="{{{ URL::to('blog/posts/' . $older->slug) }}}"><i class="fa fa-caret-left"></i> Older</a>
                        @endif
                    </div>
                    <div class="left left-divider"></div>

                    <div class="right clearfix">
                        @if($post->id === $post->max('id'))
                            <a href="{{{ action('PostsController@index') }}}">All Posts <i class="fa fa-circle-o blue"></i></a>
                        @else
                            <a href="{{{ URL::to('blog/posts/' . $newer->slug) }}}">Newer <i class="fa fa-caret-right"></i></a>
                        @endif
                    </div>
                    <div class="right right-divider"></div>
                </div>
            </div>
        </div>
@stop
