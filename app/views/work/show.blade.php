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
                                @if (!is_null($work->external_link))
                                    <li>
                                        <p>{{ $work->external_link }}</p>
                                    </li>
                                @endif
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
                                @if (!is_null($work->external_link))
                                    <li>
                                        <p>{{ $work->external_link }}</p>
                                    </li>
                                @endif
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

            @if($work->count() > 1)
                <nav class="portfolio-nav">
                    <ul class="clearfix">
                        <li class="prev-project">
                            @if($work->id === $work->min('id'))
                                <span><i class="fa fa-circle-o small-circle"></i></span>
                                <a href="{{{ action('WorkController@index') }}}">All Work</a>
                            @else
                                <span>&larr;</span>
                                <a href="{{{ URL::to('work/' . $older->slug) }}}">{{{ $older->title }}}</a>
                            @endif
                        </li>

                        <li>
                            <a href="{{{ action('WorkController@index') }}}"><span class="grid-icon"><i class="fa fa-th"></i></span></a>
                        </li>

                        <li class="next-project">
                            @if($work->id === $work->max('id'))
                                <span><i class="fa fa-circle-o small-circle"></i></span>
                                <a href="{{{ action('WorkController@index') }}}">All Work</a>
                            @else
                                <span>&rarr;</span>
                                <a href="{{{ URL::to('work/' . $newer->slug) }}}">{{{ $newer->title }}}</a>
                            @endif
                        </li>
                    </ul>
                </nav>
            @endif

        </div>
@stop
