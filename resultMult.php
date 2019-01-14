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
        color: white;
        margin-top: 2%;
      }
      #shoptxt {
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
        color: white;
        margin-top: 2%;
      }
      #subtract {
        margin-top:
      }
    </style>
  </head>

  <body id = "open">
    <div class = "container-fluid">
          <center>
            <p id = "opentxt">Click the egg to reveal your iKOMO!</p>
            <a href = "profile.php" id = "returntxt">Click to visit your collection.</a>
            <a href = "mainInterface.php" id = "shoptxt">Click to buy another iKOMO.</a>
            <br>
            <div id = "display"><?php
            session_start();
            $eggs = $_SESSION["eggs"];
            $eggNumber = 1;
            $y = 0;
            while($y<$eggs/5){
            echo '<div class = row>
            <div class = col-md-1>
            </div>';
            $x = 0;//every 5
            while($x<5){
            $rarity = $_SESSION["rarity'.$eggNumber.'"];
            $animal = $_SESSION["animal'.$eggNumber.'"];
            $rarity = preg_replace('/\s+/', '', $rarity);
            echo "<div class = 'col-md-2'>You got a " . $rarity . " " . $animal . "!";
            $animal = preg_replace('/\s+/', '', $animal);
            $url = strtolower($animal) . ".png";
            if($rarity === "rare"){
            echo "<br><img style = 'background-color: rgb(68, 181, 200);
            height: 300px;
            width: auto;
            border-radius: 15px;
            border-color: rgb(38, 152, 171);
            border-width: 10px;
            border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'></div>";
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
            echo "</div>";
            $x++;
            $eggNumber++;
          }
          $y++;
          echo "<div class = 'col-md-1'>
          </div>";
        }
              ?>
            </div>
            </center>
    </div>
  </body>
  <script>
  var eol = document.getElementById('display');
  var clol = document.getElementById('opentxt');
  var rol = document.getElementById('returntxt');
  var r2ol = document.getElementById('shoptxt');
    $("#open").click(function(){
      $('#open').css("background-image", "url(./img/openegg.gif)");
      $("#opentxt").addClass("animated fadeOut");
      setTimeout(function(){
        clol.style.display = "none";
        rol.style.display = "block";
        r2ol.style.display = "block";
        $("#returntxt").addClass("animated fadeIn");
        $("#shoptxt").addClass("animated fadeIn");
      }, 1000);
      setTimeout(function(){
        $("#display").addClass('animated fadeIn');
        eol.style.display = "block";

      }, 4000);
    });
  </script>

</html>
