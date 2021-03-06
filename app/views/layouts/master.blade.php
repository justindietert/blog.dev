<!doctype html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
@yield('title')
@yield('description')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="/css/main.css">

    <!-- If JavaScript disabled, .no-js classes will take effect -->
    <script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
    <!-- Windows mobile viewport patch -->
    <script src="/js/windows-viewport.js"></script>

    <!-- enable HTML5 elements in IE7+8 -->
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
</head>
<body>
    <!-- alert user to upgrade browser if less than IE9 -->
    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="wrap" class="clearfix">
        <hr id="topbar">

        @if (Session::has('successMessage'))
            <div class="flash" id="success"><p>&plus; {{{ Session::get('successMessage') }}}</p></div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="flash" id="failure"><p>&osol; {{{ Session::get('errorMessage') }}}</p></div>
        @endif

        <section id="main" class="row col">

            @include('partials.nav')

            @yield('content')

        </section> <!-- End Main Section -->

        @include('partials.footer')

    </div><!-- End Wrap -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <!-- Custom JS -->
    <script src="/js/main.js"></script>
</body>
</html>
