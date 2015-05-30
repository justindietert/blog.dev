
<header role="banner" class="banner clearfix">
    <div id="logo">
        <a href="{{{ action('HomeController@showHome') }}}"><i class="icon-jd-logo-black"></i><span class="screen-reader-text">Justin Dietert</span></a>
    </div>

    <a href="#" class="menu">Menu</a>

    <nav role="navigation" class="navigation">
        <ul>
            @yield('nav-active')
        </ul>
    </nav>
</header>
