@extends('layouts.master')

@section('title')
    <title>Justin Dietert | About</title>
@stop

@section('description')
    <meta name="description" content="Graphic design and web development">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li class="active"><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main">
            <div class="inner">
                {{-- <hr class="top"> --}}
                <h2>About</h2>
                <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Aperiam <a href="#">praesentium</a> veniam fuga aspernatur neque modi laboriosam voluptatibus fugit, voluptatem corporis, hic tempora quas ipsum nostrum vitae maxime ad, tempore ipsam sequi vero nisi iste. Voluptas dolorem amet temporibus placeat distinctio, sapiente ipsum quod molestiae est qui odio, perspiciatis exercitationem iusto minima iure cumque nisi aliquam blanditiis asperiores maiores ex fugiat, aspernatur excepturi tenetur pariatur. Suscipit tempora, tenetur, molestiae, amet illum exercitationem fuga eligendi, obcaecati autem laboriosam consequuntur. Magni cupiditate voluptatem aspernatur voluptatibus commodi doloribus neque, itaque consequatur, facilis quam explicabo facere ipsa fugiat assumenda. Dolores tempore laboriosam hic impedit ratione?</p>
            </div>
        </div>
@stop
