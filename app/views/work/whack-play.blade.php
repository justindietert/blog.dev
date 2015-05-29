<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:: Whack-a-Mole! ::</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/css/normalize.css" />

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="/css/foundation.css" />

    <!-- Custom Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,900,900italic,400italic' rel='stylesheet' type='text/css'>

    <!-- FontAwesome icons-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/whack.css" />

    <!-- Modernizr.js -->
    <script src="/js/vendor/modernizr.js"></script>
</head>
<body>
    <div class="row container">
        <div class="small-12 columns">
            <h1>Whack-a-Mole<span class="emph">!</span></h1>

            <div id="start" class="button tiny absolute restart">Start</div>

            <h4 id="prompt" class="emph normal">Click start to begin.</h4>
            <h3 class="letter-space-one score">Score: <span id="points"></span><span id="timer"><span id="seconds" >__</span>&nbsp;second<span id="hide-one">s</span> left</span></h3>
        </div>
    </div>

    <div class="row game-board">
        <div class="small-12 columns">
            <div class="row">
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
            </div>

            <div class="row middle">
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
            </div>

            <div class="row bottom">
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
                <div class="small-4 columns">
                    <div class="hole">
                        <div class="mole"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="row bottom-row">
        <div class="small-12 columns">

            <hr/>

            <div class="row">
                <div class="small-10 columns">
                    <p class="footer-text">© Copyright 2015 Justin Dietert.</p>
                </div>

                <div class="small-2 columns">
                    <a href="#" class="jd-logo float-right"></a>
                </div>
            </div>

        </div>
    </footer>

    <div id="winModal" class="reveal-modal full text-center" data-reveal>
        <h1 class="lime-text center-vertical">You win<span class="emph">!<br /><i class="fa fa-smile-o"></i></span></h1>
        <a class="close-reveal-modal">&#215;</a>
    </div>

    <div id="loseModal" class="reveal-modal full text-center" data-reveal>
        <h1 class="lime-text center-vertical">You lose.<br /><i class="fa fa-meh-o"></i></h1>
        <a class="close-reveal-modal">&#215;</a>
    </div>

    <audio id="audio-one">
        <source src="sound/funny_cartoon_jump.mp3"></source>
    </audio>

    <audio id="audio-two">
        <source src="sound/cartoon_up.mp3"></source>
    </audio>

    <audio id="audio-win">
        <source src="sound/small_crowd_says_yes.mp3"></source>
    </audio>

    <audio id="audio-lose">
        <source src="sound/wizard_says_no.mp3"></source>
    </audio>

<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/jquery-ui.min.js"></script>
<script src="/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<!-- whack-a-mole script -->
<script src="/js/whack.js"></script>
</body>
</html>
