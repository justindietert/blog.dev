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
            <div class="inner">
                <div class="row">
                    <div class="col one">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/space_thumb.jpg" alt="Partners in Space"><span>Partners in Space</span></a>
                    </div>
                    <div class="col two">
                        <a href="{{{ action('WorkController@whackamole') }}}" class="thumb"><img src="/img/work/thumbs/whack_thumb.jpg" alt="Whack-a-Mole!"><span>Whack-a-Mole!</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/shepard_thumb.jpg" alt="Sam Shepard"><span>Sam Shepard</span></a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/salute_thumb.jpg" alt="Salute to Freedom"><span>Salute to Freedom</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/stem_thumb.jpg" alt="STEM Graduates"><span>STEM Graduates</span></a>
                    </div>
                    <div class="col three">
                        <a href="{{{ action('WorkController@simpleSimon') }}}" class="thumb"><img src="/img/work/thumbs/simon_thumb.jpg" alt="Simple Simon"><span>Simple Simon</span></a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/hillviews_thumb.jpg" alt="Hillviews Cover"><span><em>Hillviews</em> Cover</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/social_thumb.jpg" alt="TXST Social Media"><span>TXST Social Media</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/firestation_thumb.jpg" alt="Fire Station Studios"><span>Fire Station Studios</span></a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/takeaseat_thumb.jpg" alt="Take a Seat"><span>Take a Seat</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/logos_thumb.jpg" alt="Various Identities"><span>Various Identities</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/retention_thumb.jpg" alt="TXST Retention"><span>TXST Retention</span></a>
                    </div>

                    <div class="col one">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/foster_thumb.jpg" alt="Jeff Foster Invite"><span>Jeff Foster Invite</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="/img/work/thumbs/whysociology_thumb.jpg" alt="Why Sociology?"><span>Why Sociology?</span></a>
                    </div>

                </div>
            </div>
        </div>
@stop
