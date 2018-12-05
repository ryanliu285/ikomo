<?php
  require "header.php";
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <style>
      #open {
        background: url("./img/openegg.png") no-repeat center center fixed;
        background-size: cover;
      }
      #opentxt {
        font-size: 60px;
        color: white;
        margin-top: 10%;
      }
      #display {
        margin-top: 5%;
        display: none;
        color: #59AEC7;
        font-size: 50px;
        font-family: "Dimbo";
      }
      #returntxt {
        background-color: rgba(106, 196, 206, 0.92);
        font-family: "Dimbo";
        text-decoration: none;
        text-align: center;
        border: none;
        border-bottom-color: rgba(89, 154, 165, 0.92);
        border-bottom-width: 3px;
        border-bottom-style: solid;
        display: none;
        font-size: 40px;
        color: #EBCB5A;
        margin-top: 10%;
      }
    </style>
  </head>

  <body id = "open">
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-3">

        </div>
        <div class = "col-md-6">
          <center>
            <p id = "opentxt">Click the egg to reveal your iKOMO!</p>
            <a href = "profile.php" id = "returntxt">Click to return to your collection.</a>
            <br>
            <div id = "display"><?php
            session_start();
            $rarity = $_SESSION["rarity"];
            $animal = $_SESSION["animal"];
            $rarity = preg_replace('/\s+/', '', $rarity);
            echo "You got a " . $rarity . " " . $animal . "!";
            $animal = preg_replace('/\s+/', '', $animal);
            $url = strtolower($animal) . ".png";
            if($rarity === "rare"){
            echo "<br><img style = 'background-color: rgb(68, 181, 200);
            height: 300px;
            width: auto;
            border-radius: 15px;
            border-color: rgb(38, 152, 171);
            border-width: 10px;
            border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
            }
            if($rarity === "common"){
              echo "<br><img style = 'background-color: rgb(193, 200, 161);
              border-radius: 15px;
              height: 300px;
              width: auto;
              border-color: rgb(171, 185, 110);
              border-width: 10px;
              border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
            }
            if($rarity === "epic"){
              echo "<br><img style = 'background-color: rgb(211, 146, 224);
              border-radius: 15px;
              height: 300px;
              width: auto;
              border-color: rgb(191, 60, 217);
              border-width: 10px;
              border-style: solid' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
            }
            if($rarity === "legendary"){
              echo "<br><img style = 'background-color: rgb(215, 189, 74);
              border-radius: 15px;
              height: 300px;
              width: auto;
              border-color: rgb(198, 164, 18);
              border-width: 10px;
              border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
            }
              ?>
            </div>
            </center>
        </div>
        <div class = "col-md-3">

        </div>
      </div>
    </div>
  </body>
  <script>
  var eol = document.getElementById('display');
  var clol = document.getElementById('opentxt');
  var rol = document.getElementById('returntxt');
    $("#open").click(function(){
      $('#open').css("background-image", "url(./img/openegg.gif)");
      $("#opentxt").addClass("animated fadeOut");
      setTimeout(function(){
        clol.style.display = "none";
        rol.style.display = "block";
        $("#returntxt").addClass("animated fadeIn");
      }, 1000);
      setTimeout(function(){
        $("#display").addClass('animated fadeIn');
        eol.style.display = "block";

      }, 4000);
    });
  </script>

</html>
