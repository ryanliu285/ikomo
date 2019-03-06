 <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>VEI iKOMO</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      #open{
        height:inherit;
      }
    </style>
  </head>

  <body>
    <div id = "tut">
      <div id = "tutorialText">
        <div class = "row">
          <div class = "col-md-2"><img src = "./img/ikomos/mantaray.png" width="auto" height="200px"></div>
          <div class = "col-md-9"class = "animated BounceInRight" id = "textBack" onclick = "next()">
            <p id = "1.1"><br>When you clicked the button, 100 KOMOcoins were subtracted from your account.(Click to continue!)</p>
            <p id = "2.1" class = "step"><br>So be careful if you want to do something else with your coins! (Click to continue!)</p>
            <p id = "3.1" class = "step"><br>Click on the egg to see what you got!</p>
            <p id = "4.1" class = "step"><br>Unfortunately, we can't let you keep the Orca. But, you’re now a pro at hatching iKOMO pets! Feel free to purchase more eggs, visit the marketplace, or have fun at the arcade. (Click to exit tutorial)</p>
          </div>
        </div>
      </div>
    </div>
  <script>
  var current = 1;
    function next(){
      if(current == 2){
        $("#textBack").attr("onclick","");
        $("#open").attr("onclick","startegg()")
      }else if (current == 3){
         $("#textBack").attr("onclick","window.location.href = './index.php'");
      }
      setTimeout(function(){
        $("#textBack").removeClass('animated bounceInRight');
        $("#textBack").addClass('animated bounceOutRight');
        // var temp = document.getElementById(current+".2");
        // temp.style.display = 'none';
      }, 50);
      var temp = document.getElementById(current+".1");
      temp.style.display = 'none';
      current++;
      setTimeout(function(){
      $("#textBack").removeClass('animated bounceOutRight');
      $("#textBack").addClass('animated bounceInRight');
      var temp = document.getElementById(current+".1");
      temp.style.display = 'block';
      // var temp = document.getElementById(current+".2");
      // temp.style.display = 'block';
      }, 50);
    }
  </script>
  <style>
    #textBack{
      border-radius: 15px;
      background-color: rgba(136, 211, 229, 0.92);
      cursor:pointer;
      border-color: black;
    }
    #tutorialText{
      float:bottom;
    }
    #bootText{
      word-wrap: break-word;
    }
    .step{
      display:none;
    }
  </style>
    <div  id = "open" class = "container-fluid">
      <div class = "row">
        <div class = "col-md-3">

        </div>
        <div class = "col-md-6">
          <center>
            <p id = "opentxt">Click the egg to reveal your iKOMO!</p>
            <a href = "profile.php" id = "returntxt">Click to visit your collection.</a>
            <a href = "mainInterface.php" id = "shoptxt">Click to buy another iKOMO.</a>
            <br>
            <div id = "display"><?php
            session_start();
            $rarity = "legendary";
            $animal = "Orca";
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
  var r2ol = document.getElementById('shoptxt');
  function startegg(){
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
    next();
    }
  </script>

</html>
