<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Play Simple Simon | Justin Dietert</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/css/simon/normalize.css" />

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="/css/simon/foundation.css" />

    <!-- Custom Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400|Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css' />

    <!-- FontAwesome icons-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/simon/custom.css" />

    <!-- Modernizr.js -->
    <script src="/js/simon/foundation/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row top-row">
      <div class="small-12 small-centered columns text-center">

        <div class="row">
          <div class="small-12 columns text-center">
            <h1>Simple Simon</h1>
          </div>
        </div>

        <div class="row middle-row">
          <div class="small-12 columns">
            <div class="simon-container relative">
              <h2 id="game-over" class="absolute text-center"></h2>
              <ul class="quadrant">
                <li id="0" class="tile green top-left"></li>
                <li id="1" class="tile red top-right"></li>
                <li id="2" class="tile yellow bottom-left"></li>
                <li id="3" class="tile blue bottom-right"></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row middle-row">
          <div class="small-12 small-centered text-center columns">
              <h5 id="prompt-text" class="">Click start to begin.</h5>
              <div id="start" class="button small round button-text">Start</div>
          </div>
        </div>

      </div>
    </div>

    <script src="/js/simon/foundation/vendor/jquery.js"></script>
    <script src="/js/simon/foundation/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <!-- Simple Simon JavaScript -->
    <script src="/js/simon/simon_two.js"></script>
  </body>
</html>
