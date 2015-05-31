@extends('layouts.master')

@section('title')
    <title>{{{ $work->title }}} | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="{{{ $work->title }}}">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work-show">
            <div class="inner full">
                <div class="row">
                    <div class="col one-third">
                        <h1>{{{ $work->title }}}</h1>
                        <div class="work-meta hide-for-small">
                            <hr class="work-divider">
                            <ul>
                                <li>
                                    <h2>Client</h2>
                                    <p>{{{ $work->client }}}</p>
                                </li>
                                <li>
                                    <h2>Role</h2>
                                    <p>{{{ $work->role }}}</p>
                                </li>
                                <li>
                                    <p>{{ $work->external_link }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col two-thirds">
                        <p class="work-intro">
                            {{ $work->description }}
                        </p>
                        <div class="work-meta show-for-small">
                            <hr class="work-divider">
                            <ul>
                                <li>
                                    <h2>Client</h2>
                                    <p>{{{ $work->client }}}</p>
                                </li>
                                <li>
                                    <h2>Role</h2>
                                    <p>{{{ $work->role }}}</p>
                                </li>
                                <li>
                                    <p>{{ $work->external_link }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @if (!is_null($work->img_1))
                    <div class="row">
                        <div class="col full-spread">
                            <img src="{{{ $work->img_1 }}}" alt="">
                        </div>
                    </div>
                @endif
                @if (!is_null($work->img_2))
                    <div class="row">
                        <div class="col full-spread">
                            <img src="{{{ $work->img_2 }}}" alt="">
                        </div>
                    </div>
                @endif
                @if (!is_null($work->img_3))
                    <div class="row">
                        <div class="col full-spread">
                            <img src="{{{ $work->img_3 }}}" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
@stop
