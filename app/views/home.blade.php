@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Home</title>
@stop

@section('description')
    <meta name="description" content="Graphic design and web development">
@stop

@section('nav-active')
    <li class="active"><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main">
            <div class="inner">

                <h2>Home</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod porro perspiciatis nesciunt repudiandae error, provident, facere quasi fugit nisi quis hic facilis pariatur aliquam inventore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem tempore est maxime velit? Laboriosam praesentium minima id officiis ullam non mollitia incidunt excepturi, quas at laudantium sequi maxime sint, cupiditate itaque iusto in doloribus quo veritatis vero. Laborum dolorum repellat officia nobis perferendis est, dignissimos quasi quas maiores recusandae? Iste!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, perferendis neque consequatur esse consequuntur odio sunt cumque. Maiores magnam, distinctio similique labore inventore fugit obcaecati, necessitatibus ratione cupiditate? Tempore animi, corrupti ducimus saepe possimus commodi assumenda praesentium nesciunt aliquam sit eos. Odio reprehenderit quaerat in asperiores praesentium cupiditate, soluta ea odit dicta mollitia iusto possimus alias iste optio ad, labore omnis quis suscipit dolorem quibusdam et sunt doloremque? Nihil non voluptates, voluptatum sunt laboriosam numquam quibusdam delectus aliquam eius doloremque, eligendi alias autem placeat nemo aperiam! Est itaque quasi voluptatum expedita officiis, sequi velit iste deserunt mollitia fugit, cumque voluptatem?</p>
     
            </div>
        </div>
@stop