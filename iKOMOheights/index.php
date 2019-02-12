<!--<?php
  /* session_start();
  $gameAnimalx = $_COOKIE[$cookie_name];
  echo '<script type="text/javascript">
  var x = document.cookie;
  alert(x);</script>'; */
 ?> -->

<!DOCTYPE html>
<html>
<div align="right">
<form>
  <input type="text" id="st-search-input" class="st-search-input" />
</form>

</div>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "/assets/js/js.cookie.js"></script>
    <meta charset="utf-8">
    <title>iKOMO Heights!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png" />
    <script src="/assets/js/prefixfree.min.js"></script>
  </head>
  <body>
    <div class="container">

      <canvas id="canvas">
        Aww, your browser doesn't support HTML5!
      </canvas>

      <div id="mainMenu">
        <h1 id = "stroked">iKOMO Heights</h1>
        <h3>play to earn KOMOcoins!</h3>
        <p class="info">
          use
          <span class="key left">←</span>
          <span class="key right">→</span>
          to move and space to restart...
        </p>
        <a class="button" href="javascript:init()">Play</a>
      </div>

      <div id="gameOverMenu">
        <h1>game over!</h1>
        <h3 id="go_score">you scored 0 points</h3>

        <a class="button" href="javascript:reset()">Restart</a>
      </div>

      <!-- Preloading image ;) -->
      <img id="sprite" src="flyingsquirrel.png"/>

      <div id="scoreBoard">
        <p id="score">0</p>
      </div>

    </div>
    <script src="main.js"></script>
    <script>
      var x = Cookies.get('ArcadeAnimalx');
      x+=".png";
      console.log(x);
      $("#sprite").attr("src", x);
      /*var el = document.getElementById("sprite");
      console.log(el);
      el.innerHTML = x; */
    </script>
  </body>
</html>
