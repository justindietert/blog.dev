@extends('layouts.master')

@section('title')
    <title>Resum&eacute; | Justin Dietert</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's resumé">
@stop

@section('nav-active')
    <li><a href="{{{ action('WorkController@index') }}}">Work</a></li>
    <li class="active"><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="resume">
            <div class="inner full">
                <hr class="top">

                <div class="row">
                    <div class="col sixty">
                        <h2 class="typl8-epsilon">Objective</h2>
                        <p>To combine my 10 years of graphic design experience with my full-stack programming skills to add value to a company that demands only the best from its employees and values mentorship and continued learning.</p>

                        <h2 class="typl8-epsilon">Experience</h2>

                        <h3 class="typl8-delta">Codeup Bootcamp Projects</h3>
                        <h6>April &ndash; May 2015 | San Antonio, Texas</h6>
                        <ul class="experience">
                            <li><em>Adlister</em>: a Craigslist clone created in PHP over the course of one week with a partner. My main contributions were designing and building a customized front-end with the Zurb Foundation framework and integrating it with the backend functionality.</li>
                            <li><em>Blog (<a href="{{{ action('HomeController@showHome') }}}">justindietert.com</a>)</em>: a solo two-week portfolio and online resum&eacute; project, as well as a personal blog. Built with Laravel, utilizing the full LEMP+J stack. I also used SASS and implemented a custom responsive grid system, as well as custom JavaScript/jQuery components.</li>
                            <li><em>TyleNinja</em>: a two-week team capstone project. TyleNinja is a tile-sliding puzzle game web app, built from scratch using Laravel, JavaScript, jQuery, and MySQL. The full application <a href="http://tyle.ninja/" target="_blank">can be viewed here</a>.</li>
                        </ul>

                        <h3 class="typl8-delta">Senior Graphic Designer</h3>
                        <h6>Texas State University, Office of University Marketing</h6>
                        <h6>July 2012 &ndash; December 2014 | San Marcos,&nbsp;Texas</h6>
                        <ul class="experience">
                            <li>Worked with clients from many of the diverse departments and offices of the university to effectively market their programs and services to both internal and external audiences</li>
                            <li>Designed within the university’s branding guidelines, managing multiple projects simultaneously from conception to completion while collaborating with a team of writers, photographers, and videographers</li>
                            <li>Projects included publication design, magazine ad design, invitation design, brochure design, logo design, booklet design, email marketing, and other printed materials</li>
                        </ul>

                        <h3 class="typl8-delta">Marketing and Design Manager</h3>
                        <h6>Digital Pro Lab</h6>
                        <h6>2010 &ndash; 2012 | San Antonio, Texas</h6>
                        <ul class="experience">
                            <li>Increased sales and revenue by marketing company services to professional clients and supervised design staff to ensure success of projects</li>
                            <li>Lead designer for print and online advertising campaigns and in charge of monthly email newsletters from concept to HTML code</li>
                        </ul>

                        <h3 class="typl8-delta">Graphic Designer</h3>
                        <h6>Digital Pro Lab</h6>
                        <h6>2005 &ndash; 2010 | San Antonio, Texas</h6>
                        <ul class="experience">
                            <li>Worked with in-house design team to create digital and print marketing material for company and professional clients while managing multiple projects and meeting tight deadlines</li>
                            <li>Supervised company website re-design while providing support to in-house web designer through the creation of graphics and written content</li>
                        </ul>
                    </div>
                    <div class="col forty">
                        <h2 class="typl8-epsilon">Education</h2>
                        <h3 class="typl8-delta">Codeup Bootcamp</h3>
                        <h6>Graduated May 2015</h6>
                        <ul class="education">
                            <li>LEMP+J Web Development</li>
                            <li>4-month immersive bootcamp</li>
                        </ul>
                        <h3 class="typl8-delta">Bachelor of Fine Arts, New Media</h3>
                        <h6>Graduated May 2008</h6>
                        <ul class="education">
                            <li>University of Texas at San Antonio</li>
                            <li>4.0 GPA, <em>summa cum laude</em></li>
                        </ul>

                        <h2 class="typl8-epsilon">Skills</h2>
                        <ul>
                            <li>LEMP stack (Linux, Nginx, MySQL, PHP)</li>
                            <li>HTML5, CSS3, JavaScript, jQuery</li>
                            <li>Vagrant, Laravel MVC framework, Sequel Pro</li>
                            <li>Zurb Foundation, Twitter Bootstrap, Materialize CSS</li>
                            <li>Version control &mdash; Git and GitHub</li>
                            <li>Brand and visual identity creation</li>
                            <li>Layout, typography, color theory, photography</li>
                            <li>Design project management, art direction</li>
                            <li>Adobe InDesign, Illustrator, Photoshop, Lightroom</li>
                        </ul>
                    </div>
                    <div class="row col">
                        <div class="col">
                            <a href="/resume/download" class="pdf-resume">Download PDF&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
