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

                <hr class="top">

                <a href="#" class="pdf-resume">PDF&nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i></a>

                <h5>Experience</h5>
                <h4>Freelance Designer and&nbsp;Web&nbsp;Developer</h4>
                <h6>May 2015 &ndash; present | San Antonio, Texas</h6>
                <ul class="experience">
                    <li>Designing and building websites and applications through proficiency in the Laravel MVC framework and the LAMP+J stack</li>
                    <li>Development done in a Vagrant environment utilizing version control with Git and Github</li>
                </ul>

                <h4>Senior Graphic Designer</h4>
                <h6>Texas State University, Office of University Marketing</h6>
                <h6>July 2012 &ndash; December 2014 | San Marcos, Texas</h6>
                <ul class="experience">
                    <li>Worked with clients from many of the diverse departments and offices of the university to effectively market their programs and services to both internal and external audiences</li>
                    <li>Designed within the university’s branding guidelines, managing multiple projects simultaneously from conception to completion</li>
                    <li>Projects included publication design, magazine ad design, invitation design, brochure design, logo design, booklet design, email marketing, and other printed materials</li>
                    <li>Collaborated with in-house team of graphic designers, writers, photographers, and videographers on a daily basis</li>
                </ul>

                <h4>Marketing and Design Manager</h4>
                <h6>Digital Pro Lab</h6>
                <h6>2010 &ndash; 2012 | San Antonio, Texas</h6>
                <ul class="experience">
                    <li>Increased sales and revenue by marketing company services to professional clients and supervised design staff to ensure success of projects</li>
                    <li>Lead designer for print and online advertising campaigns and in charge of monthly email newsletters from concept to HTML code</li>
                    <li>Assisted with vendor and product selection, product development, and regularly attended trade shows to make services recommendations</li>
                    <li>Planned special events and delivered presentations to professional clients</li>
                </ul>

                <h4>Graphic Designer</h4>
                <h6>Digital Pro Lab</h6>
                <h6>2005 &ndash; 2010 | San Antonio, Texas</h6>
                <ul class="experience">
                    <li>Worked with in-house design team to create digital and print marketing material for company and professional clients</li>
                    <li>Supervised company website re-design while providing support to in-house web designer through the creation of graphics and written content</li>
                    <li>Responsible for managing multiple projects simultaneously and meeting tight deadlines required by professional clients</li>
                    <li>In charge of product photography</li>
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

                <h5>Skills</h5>
                <ul>
                    <li>LAMP stack (Linux, Apache, MySQL, PHP)</li>
                    <li>HTML5, CSS3, JavaScript, jQuery</li>
                    <li>Vagrant, Laravel MVC framework, Sequel Pro</li>
                    <li>Zurb Foundation and Twitter Bootstrap</li>
                    <li>Version control &mdash; Git and GitHub</li>
                    <li>Brand and visual identity creation</li>
                    <li>Layout, typography, color theory, photography</li>
                    <li>Design project management, art direction</li>
                    <li>Adobe InDesign, Illustrator, Photoshop, Lightroom</li>
                </ul>

            </div>
        </div>
@stop