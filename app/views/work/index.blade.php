@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Work</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's portfolio">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li class="active"><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work">
            <div class="inner full">
                <div class="row">
                    <div class="col one">
                        <a href="{{{ action('WorkController@space') }}}" class="thumb">
                            <img src="/img/work/thumbs/space_thumb.jpg" alt="Partners in Space">
                            <div class="title-overlay">
                                <h2>Partners in Space</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col two">
                        <a href="{{{ action('WorkController@whackamole') }}}" class="thumb">
                            <img src="/img/work/thumbs/whack_thumb.jpg" alt="Whack-a-Mole!">
                            <div class="title-overlay">
                                <h2>Whack-a-Mole!</h2>
                                <p>web design &plus; web&nbsp;development</p>
                            </div>
                        </a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/shepard_thumb.jpg" alt="Sam Shepard">
                            <div class="title-overlay">
                                <h2>Sam Shepard</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/salute_thumb.jpg" alt="Salute to Freedom">
                            <div class="title-overlay">
                                <h2>Salute to Freedom</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/stem_thumb.jpg" alt="STEM Graduates">
                            <div class="title-overlay">
                                <h2>STEM Graduates</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col three">
                        <a href="{{{ action('WorkController@simpleSimon') }}}" class="thumb">
                            <img src="/img/work/thumbs/simon_thumb.jpg" alt="Simple Simon">
                            <div class="title-overlay">
                                <h2>Simple Simon</h2>
                                <p>web design &plus; web&nbsp;development</p>
                            </div>
                        </a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/hillviews_thumb.jpg" alt="Hillviews Cover">
                            <div class="title-overlay">
                                <h2><span class="italic">Hillviews</span> Cover</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/social_thumb.jpg" alt="Texas State University Social Media">
                            <div class="title-overlay">
                                <h2>TXST Social&nbsp;Media</h2>
                                <p>web design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/firestation_thumb.jpg" alt="Fire Station Studios">
                            <div class="title-overlay">
                                <h2>Fire Station Studios</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/takeaseat_thumb.jpg" alt="Take a Seat">
                            <div class="title-overlay">
                                <h2>Take a Seat</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/logos_thumb.jpg" alt="Various Identities">
                            <div class="title-overlay">
                                <h2>Various Identities</h2>
                                <p>identity &plus; print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/retention_thumb.jpg" alt="TXST Retention">
                            <div class="title-overlay">
                                <h2>TXST Retention</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/foster_thumb.jpg" alt="Jeff Foster Invite">
                            <div class="title-overlay">
                                <h2>Jeff Foster Invite</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb">
                            <img src="/img/work/thumbs/whysociology_thumb.jpg" alt="Why Sociology?">
                            <div class="title-overlay">
                                <h2>Why Sociology?</h2>
                                <p>print design</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
@stop
