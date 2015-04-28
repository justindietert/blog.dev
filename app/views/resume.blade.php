@extends('layouts.master')

@section('title')
    <title>Justin Dietert | Resum&eacute;</title>
@stop

@section('description')
    <meta name="description" content="Justin Dietert's resumé">
@stop

@section('nav-active')
    <li><a href="{{{ action('HomeController@showHome') }}}">Home</a></li>
    <li><a href="{{{ action('HomeController@showWork') }}}">Work</a></li>
    <li><a href="{{{ action('HomeController@showAbout') }}}">About</a></li>
    <li class="active"><a href="{{{ action('HomeController@showResume') }}}">Resum&eacute;</a></li>
    <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
@stop

@section('content')
        <div role="main" class="main" id="resume">
            <div class="inner">
                <h2>Justin Dietert</h2>

                <hr>

                <h5>Skills</h5>
                <ul>
                    <li>LAMP stack (Linux, Apache, MySQL, PHP)</li>
                    <li>HTML5, CSS3, JavaScript, jQuery</li>
                    <li>Vagrant, Laravel MVC framework, Sequel Pro</li>
                    <li>Zurb Foundation and Twitter Bootstrap</li>
                    <li>version control &mdash; Git and <a href="http://github.com/justindietert">GitHub</a></li>
                    <li>brand and visual identity creation</li>
                    <li>layout, typography, color theory, photography</li>
                    <li>design project management, art direction</li>
                    <li>Adobe InDesign, Illustrator, Photoshop, Lightroom</li>
                </ul>

                <hr>
        
                <h5>Education</h5>
                <h4>Codeup Bootcamp, 2015</h4>
                <ul class="education">
                    <li>LAMP+J Web Development</li>
                    <li>4-month immersive bootcamp</li>
                </ul>   
                <h4>Bachelor of Fine Arts, New Media, 2008</h4>
                <ul class="education">
                    <li>University of Texas at San Antonio</li>
                    <li>GPA: 4.0, Summa Cum Laude</li>
                </ul>

                <hr>

                <h5>Experience</h5>
                <h4>Freelance Web Developer</h4>
                <p class="sub">May 2015 &ndash; present | San Antonio, TX</p>
                <ul class="experience">
                    <li>designing and building websites and applications through proficiency in the Laravel MVC framework and the LAMP+J stack</li>
                    <li>development done in a Vagrant environment utilizing version control with Git and Github</li>
                </ul>

                <h4>Senior Graphic Designer</h4>
                <p class="sub">Texas State University, Office of University Marketing</p>
                <p class="sub">July 2012 &ndash; December 2014 | San Marcos, TX</p>
                <ul class="experience">
                    <li>worked with clients from many of the diverse departments and offices of the university to effectively market their programs and services to both internal and external audiences</li>
                    <li>designed within the university’s branding guidelines, managing multiple projects simultaneously from conception to completion</li>
                    <li>projects included publication design, magazine ad design, invitation design, brochure design, logo design, booklet design, email marketing, and other printed materials</li>
                    <li>collaborated with in-house team of graphic designers, writers, photographers, and videographers on a daily basis</li>
                </ul>
            </div>
        </div>
@stop