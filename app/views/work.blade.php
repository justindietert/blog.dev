@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Work</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's portfolio">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li class="active"><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="work">
            <div class="inner">
                <div class="row">
                    <div class="col one">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 1</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 2</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 3</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col one">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 4</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 5</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 6</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col one">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 7</span></a>
                    </div>
                    <div class="col two">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 8</span></a>
                    </div>
                    <div class="col three">
                        <a href="#" class="thumb"><img src="http://placehold.it/400x400" alt=""><span>Item 9</span></a>
                    </div>
                </div>
            </div>
        </div>
@stop