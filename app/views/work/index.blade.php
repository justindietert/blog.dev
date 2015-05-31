@extends('layouts.master')

@section('title')
    <title>Work | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's portfolio">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work">
            <div class="inner full">
                <div class="row">
                    @foreach($work as $work_item)
                        <div class="col third">
                            <a href="{{{ action('WorkController@show', $work_item->slug) }}}" class="thumb">
                                <img src="{{{ $work_item->thumbnail }}}" alt="{{{ $work_item->title }}}">
                                <div class="title-overlay">
                                    <h2>{{{ $work_item->title }}}</h2>
                                    <p>{{{ $work_item->role }}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@stop
