<?php
require 'header.php';
?>

<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <style>
      .signup {
        text-align: center;
      }
      #overlay {
        width: 100%;
        height: 200%;
        background-color: #F9F4D2;
        position: fixed;
        z-index: 101;
      }
      .percent-count {
        width: 450px;
        height: 50px;
        margin: 10px auto;
        font-size: 40px;
        text-align: center;
        color: #71DDE2;
      }
      .progress-bar {
        width: 506px;
        height: 26px;
        background-color: #71DDE2;
        border-radius: 13px;
        margin: 10px auto;
      }
      .progress {
        width: 25px;
        height: 20px;
        border-radius: 10px;
        background-color: #34ABB7;
      }
      #loading {
        height: 200px;
        width: 100%;
      }
      #loadimage {
        display: block;
        margin: 10px auto;
      }
      #accountoverlay {
        margin: auto;
        width: 50%;
        height: 500px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: block;
        border-radius: 15px;
        border: solid;
        border-width: 10px;
        border-color: rgba(136, 211, 229, 0.92);

      }
      #login {
        float: left;
        width: 100px;
      }
      .buttonx{
        background-color: rgba(106, 196, 206, 0.92);
        font-size: 18px;
        font-family: "Dimbo";
        text-decoration: none;
        text-align: center;
        border: none;
        border-bottom-color: rgba(89, 154, 165, 0.92);
        border-bottom-width: 2px;
        border-bottom-style: solid;
      }
      .inputx {
        background-color: rgba(0,0,0,0);
        border: none;
        border-bottom-width: 4px;
        border-bottom-style: solid;
        border-bottom-color: rgba(89, 154, 165, 0.92);
        font-family: "Dimbo";
        width: 250px;
        font-size: 18px;
      }
      h2 {
        font-family: "Dimbo";
        font-size: 40px;
      }
    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <div id = "overlay">
        <div id = "loading">
          <img id = "loadimage" height = "200px" width = "auto" src = "img/loading.png">
        </div>
        <div class = "progress-bar">
          <div class = "progress" id = "progress"></div>
        </div>
        <div id = "percentCount" class = "percent-count">
        </div>
    </div>
    <br>
    <br>
     <div id = "accountoverlay">
      <div class =  "container-fluid">
          <div class = "row">
              <div class = "signup col-md-6">
                  <br>
                  <img height = "100px" width = "auto" src = "./img/ikologo.png">
              </div>
              <div class = "signup col-md-6">
                  <br>
                  <iframe width ="250" height = "150" src  = "https://www.youtube.com/watch?v=Y6bFv3uIuQg">
                  </iframe>
              </div>
          </div>
          <div class = "row">
              <div class = "col-md-6">
                  <form class = "signup" action = "includes/login.inc.php" method = "post">
                    <br>
                    <input class = "inputx" type = "text" name = "mailuid" placeholder = "username">
                    <br>
                    <br>
                    <input class = "inputx" type = "password" name = "pwd" placeholder = "password">
                    <br>
                    <br>
                    <button class = "buttonx" type = "submit" name = "login-submit">Login</button>
                    <br>
                    <br>
                    <br>
                    <button formaction = "signup.php" class = "buttonx" id = "signButton">Signup!</button>
                    <button formaction = "about.php" class = "buttonx">Learn More!</button>
                  </form>
              </div>
              <div class = "col-md-6 signup">
                <br>
                <h2>What is iKOMO?</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit labortis nisl.</p>
              </div>
          </div>
      </div>
    </div>
  </div>
    <div class = "container-fluid">
      <br>
      <div class = "row">
        <div class = "col-md-1">

        </div>
        <div class = "col-md-10">
          <div>

          </div>
        </div>
        <div class = "col-md-1">

        </div>
      </div>
      <br>
      <br>
      <br>
      <div class = "row">
        <div class = 'col-md-4'>
        </div>
        <div class = 'col-md-8'>
            <button onclick = "window.location.href = './mainInterface.php'">iKOMO Shop</button>
        </div>
        <script>

          // function toggleVisible() {
          //   var x = document.getElementById("pleaseLogIn");
          //   if (x.style.display === "none") {
          //     x.style.display = "block";
          //   } else {
          //     x.style.display = "none";
          //   }
          // }
        </script>
      </div>
    </div>
  </body>

<script>
  function progress (){
    var ol = document.getElementById('overlay');
    var hol = document.getElementById('hoverlay');
    var sol = document.getElementById("accountoverlay");
    var prg = document.getElementById('progress');
    var percent = document.getElementById('percentCount');
    var counter = 0;
    var progress = 0;
    var id = setInterval(frame,50);
    hol.style.display = "block";
    function frame(){
      if(progress >= 500 && counter >= 100){
        clearInterval(id);
        ol.style.display = "none";
        hol.style.display = "none";
        var str = '<div id = "mainWelcomeText" class = "animated slideInUp"><img id = "mainScreenLogo" src = "./img/ikologo.png" height ="146px" width = "402px"></div>';
        var Obj = document.getElementById('mainWelcomeText');
        Obj.outerHTML=str;
      }
      else{
        progress += 10;
        counter +=2;
        prg.style.width = progress + 'px';
        percent.innerHTML = counter + '%';
      }
    }
  }
  progress();
</script>

 </html>
