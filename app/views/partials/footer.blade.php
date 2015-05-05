        <footer role="contentinfo" class="row col">
            <div class="foot">
                <div class="inner foot centertext">
                    <ul class="social">
                        <li><a href="http://github.com/justindietert">GitHub</a></li>
                        <li><a href="http://instagram.com/justindietert">Instagram</a></li>
                        <li><a href="http://linkedin.com/in/justindietert">LinkedIn</a></li>
                        <li><a href="http://twitter.com/justindietert">Twitter</a></li>
                    </ul>
                    <hr>
                    <p>Copyright &copy; 2015 Justin Dietert.
                        @if(Auth::check())
                            <a href="{{{ action('HomeController@logout') }}}">&nbsp;Log out.</a></p>
                        @else
                            <a href="{{{ action('HomeController@login') }}}">&nbsp;Log in.</a></p>
                        @endif
                </div>
            </div>
        </footer>
