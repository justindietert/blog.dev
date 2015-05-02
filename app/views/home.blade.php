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
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main">
            <div class="inner">
                <hr class="top">
                <h2>Home</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="/">Tempora</a> eligendi quae quidem, consequuntur accusamus delectus ipsam repellat reprehenderit distinctio ea, dolorum doloremque vitae <a href="/">commodi veritatis</a> et provident quia corrupti dolor atque! Veritatis ullam possimus assumenda suscipit unde praesentium rem magnam nostrum facere. In nemo nobis quae aut, excepturi qui! Delectus eaque rem, perferendis, suscipit at sapiente cum iste dolore deserunt blanditiis harum porro, est itaque totam ea dolorem quibusdam, laboriosam necessitatibus. Necessitatibus beatae quisquam ipsa ut aliquid debitis <a href="/">quaerat harum</a> quasi veniam dicta placeat, sint voluptatum earum fuga iste commodi pariatur atque quod suscipit? Autem atque iusto enim error nam, obcaecati beatae minima laborum sunt illo nisi placeat sint ex ipsa, quod quo in? Optio eum tempora repudiandae non adipisci voluptatibus magnam illo laboriosam, odit, obcaecati. Similique velit est enim asperiores voluptate tempore deleniti aperiam atque a, vitae ab, quis quod labore? <a href="">Distinctio</a> dolorum ex, consequuntur repudiandae consequatur laudantium eum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse odio, sint maxime doloremque, cumque, consequatur illo nostrum perspiciatis alias, facere vitae. Aliquam nostrum excepturi officia tempora, sit quibusdam odit, dolore maiores reiciendis pariatur adipisci odio impedit sequi ea ipsa saepe iste enim dolorem totam consequuntur quidem est! Libero provident laudantium voluptate inventore praesentium ut deleniti quae officiis similique voluptas consequuntur minus placeat quam facere vero cupiditate non ullam, laboriosam quas esse necessitatibus recusandae! Voluptate, aut, explicabo. Cupiditate sunt corporis delectus explicabo, dolores aut laboriosam, quaerat expedita maiores hic vel placeat voluptatum repudiandae nesciunt tenetur ut? Molestias rerum maxime provident. Officiis?</p>
            </div>
        </div>
@stop
