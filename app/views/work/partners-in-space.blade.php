@extends('layouts.master')

@section('title')
    <title>Partners in Space | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Partners in Space">
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
                        <h2>Partners in Space</h2>
                        <hr class="work-divider">
                        <h3>Client</h3>
                        <ul>
                            <li>Texas State University</li>
                        </ul>
                        <h3>Role</h3>
                        <ul>
                            <li>print design</li>
                        </ul>
                    </div>
                    <div class="col two-thirds">
                        <p class="work-intro">
                            Designed for Texas State University's alumni magazine, <em>Hillviews</em>, the Partners in Space article needed to highlight the collaboration between Texas State, Jacobs Engineering, and NASA on projects such as the International Space Station and the manned mission to Mars.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col full-spread">
                        <img src="/img/work/spreads/space_spread_hero-2.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col full-spread">
                        <img src="/img/work/spreads/space_spread_zoom-mars-2.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col full-spread">
                        <img src="/img/work/spreads/space_spread.jpg" alt="Partners in Space magazine spread">
                    </div>
                </div>
            </div>
        </div>
@stop
