@extends('layouts.master')

@section('title')
    <title>Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Graphic design and web development">
@stop

@section('nav-active')
    <li><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="home">
            <div class="inner full">
                <div class="row">
                    <div class="col one-third">
                        <h1>Justin Dietert</h1>
                        <div class="work-meta hide-for-small">
                            <hr class="work-divider">
                            <ul>
                                <li>
                                    <h2>Designer</h2>
                                    <p>skilled in typography</p>
                                </li>
                                <li>
                                    <h2>Developer</h2>
                                    <p>loves clean code</p>
                                </li>
                                <li>
                                    <p>
                                        <a href="{{{ action('WorkController@index') }}}" class="play-now">View Work &rarr;</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col two-thirds">
                        <p class="work-intro">
                            Hello. I am Justin Dietert, a designer and full-stack web developer with a deep love of typography and a passion for clean, semantic code. I have a background in fine arts and photography, and I get excited about minimalist design. Check out my <a href="{{{ action('WorkController@index') }}}">work</a> and feel free to <a href="mailto:hello@justindietert.com">get in touch</a>.
                        </p>
                        <div class="work-meta show-for-small">
                            <hr class="work-divider">
                            <ul>
                                <li>
                                    <h2>Designer</h2>
                                    <p>skilled in typography</p>
                                </li>
                                <li>
                                    <h2>Developer</h2>
                                    <p>loves clean code</p>
                                </li>
                                <li>
                                    <p>
                                        <a href="{{{ action('WorkController@index') }}}" class="play-now">View Work &rarr;</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="work">
                    <div class="col two-thirds right">
                        <a href="http://instagram.com/justindietert/" class="thumb">
                            <img src="/img/jd-home.jpg" alt="Justin Dietert">
                            <div class="title-overlay">
                                <h2>Self Portrait</h2>
                                <p>check out my Instagram</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
@stop
