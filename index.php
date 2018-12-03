<?php
require 'header.php';
?>

<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
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
        border-bottom-width: 3px;
        border-bottom-style: solid;
      }
      .buttonx:hover {
        cursor: pointer;
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
        font-size: 50px;
      }
      #signupoverlay {
        margin: auto;
        width: 50%;
        height: 550px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: none;
        border-radius: 15px;
        border: solid;
        border-width: 10px;
        border-color: rgba(136, 211, 229, 0.92);
      }
      .signuperror {
        color: rgb(210, 22, 25);
        font-family: "Dimbo";
        font-size: 16px;
      }
      .signupsucc {
        color: rgb(22, 152, 47);
        font-family: "Dimbo";
        font-size: 16px;
      }
      #aboutanim {
        padding: 3px;
      }
      #signupanim {
        padding: 3px;
      }

      #returnanim{
        padding: 4px;
      }
      #closedisclaimer{
        color: white;
      }
      #closedisclaimer:hover{
        cursor: pointer;
      }
      #disclaimtxt{
        color: white;
        padding-top: 5px;
      }
      .signtxt{
        font-size: 14px;
      }
      #loggedin {
        display: none;
      }

    @media only screen and (min-width: 992px) {
      #mkp{
        margin-top: 130%;
        float: right;
      }
      #arc{
        float: left;
        margin-top: 130%;
      }
      #hme {
        margin-top: 90%;
        float: left;
        position: relative;
        right: 45%;
      }
      #str{
        margin-top: 90%;
        float: right;
        position: relative;
        left: 39%;
        z-index: 99;
      }
      .bigbt{
        font-size: 24px;
        color: black;
        text-decoration: none;
        padding: 3px;
        padding-left: 5px;
        padding-right: 5px;
      }
}
    @media only screen and (min-width: 1537px) {
      #mkp{
        margin-top: 145%;
        float: right;
      }
      #arc{
        float: left;
        margin-top: 145%;
      }
      #hme {
        margin-top: 105%;
        float: left;
        position: relative;
        right: 45%;
      }
      #str{
        margin-top: 105%;
        float: right;
        position: relative;
        left: 39%;
        z-index: 99;
      }
      .bigbt{
        font-size: 34px;
        color: black;
        text-decoration: none;
        padding: 3px;
        padding-left: 5px;
        padding-right: 5px;
      }
    }
    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <div>
    <!-- Loading screen -->
    <div id = "overlay">
        <div id = "loading">
          <img id = "loadimage" height = "200px" width = "auto" src = "img/loadopt.gif">
        </div>
        <div class = "progress-bar">
          <div class = "progress" id = "progress"></div>
        </div>
        <div id = "percentCount" class = "percent-count">
        </div>
    </div>
    <br>
    <br>
    <!-- Check if user is logged in -->
    <?php
      /* if logged in, display buttons */
      if (isset($_SESSION['userID'])){
        echo '<div id = "loggedin" class = "test container-fluid">
                          <div class = "test row">
                            <div class = "test col-md-3">
                              <a href = "marketMain.php" id = "mkp" class = "bigbt buttonx">Marketplace</a>
                            </div>
                            <div class = "col-md-6 test">
                              <div class = "container-fluid test">
                              <div class = "row test">
                                <div class = "col-md-6 test">
                                    <a href = "profile.php" id = "str" class = "bigbt buttonx topb">Collection</a>
                                </div>
                                  <div class = "col-md-6 test">

                                    <a href = "mainInterface.php" id = "hme" class = "bigbt buttonx topb">Store</a>
                                  </div>
                              </div>
                            </div>
                          </div>
                            <div class = "col-md-3 test">
                            <div id = "topblocker1 test">
                            </div>
                              <a href = "arcade.php" id = "arc" class = "buttonx bigbt">Arcade</a>
                            </div>
                          </div>
                        </div>';
      }
      /* If not logged in, display login screen. */
      else {
        echo '<div id = "accountoverlay" >
          <div class =  "container-fluid">
              <div class = "row">
                  <div class = "signup col-md-6">
                      <br>
                      <img height = "100px" width = "auto" src = "./img/ikologo.png">
                  </div>
                  <div class = "signup col-md-6">
                      <br>
                      <img height = "175px" width = "auto" src = "./img/shibwelcome.png">
                  </div>
              </div>
              <div class = "row">
                  <div class = "col-md-6">
                      <form class = "signup" action = "includes/login.inc.php" method = "post">
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
                        <a id = "aboutanim" class = "buttonx">Learn More!</a>
                        <a id = "signupanim" class = "buttonx" >Signup!</a>
                      </form>
                  </div>
                  <div class = "col-md-6 signup">
                    <br>
                    <h2>What is iKOMO?</h2>
                    <p>At iKOMO, we focus on combining the nostalgic feeling of gaming with the cutting edge technology available today. Using blockchain technology you can collect, trade, and play with your new digital companions!</p>
                  </div>
              </div>
          </div>
        </div>';
      }
    ?>
    <!-- Sign up Overlay-->
    <div id = "signupoverlay">
      <div class =  "container-fluid">
          <div class = "row">
              <div class = "signup col-md-4">
                  <br>
                  <img height = "50px" width = "auto" src = "./img/ikologo.png">
              </div>
              <div class = "signup col-md-8">
              </div>
          </div>
          <div class = "row">
              <div class = "col-md-3">
              </div>
              <div class = "col-md-6 signup">
                <center>
                  <h2>Signup</h2>
                  <p class = "signtxt">Due to certain restrictions with the VEI network, users must make an account to achieve full functionality.</p>
                </center>
                <!--ERROR HANDLING for Sign Up -->
                <?php
                   if(isset($_GET['error'])){
                     if($_GET['error'] == "emptyfields"){
                         echo '<center><p class = "signuperror">Fill in all fields!</p></center>';
                     }
                     else if ($_GET["error"] == "invalidmailuid"){
                       echo '<center><p class = "signuperror">Invalid Username and E-mail!</p></center>';
                     }
                     else if ($_GET["error"] == "invaliduid"){
                       echo '<center><p class = "signuperror">Invalid Username!</p></center>';
                     }
                     else if ($_GET["error"] == "invalidmail"){
                       echo '<center><p class = "signuperror">Invalid E-mail!</p></center>';
                     }
                     else if ($_GET["error"] == "passwordcheck"){
                       echo '<center><p class = "signuperror">Your passwords do not match!</p></center>';
                     }
                     else if ($_GET["error"] == "usertaken"){
                       echo '<center><p class = "signuperror">Username is already taken!!</p></center>';
                     }
                     else if ($_GET["error"] == "success"){
                       echo '<center><p class = "signupsucc">Signup Successful!</p></center>';
                     }
                   }
                 ?>
                <!-- Sign up form -->
                <form action = "includes/signup.inc.php" method = "post">

                  <center><input class = "inputx" type = "text" name = "uid" placeholder= "Username">
                  <br>
                  <br>
                  <input class = "inputx" type = "text" name = "mail" placeholder= "E-mail">
                  <br>
                  <br>
                  <input class = "inputx" type = "password" name = "pwd" placeholder= "Password">
                  <br>
                  <br>
                  <input class = "inputx" type = "password" name = "pwd-repeat" placeholder= "Repeat Password">
                  <br>
                  <br>
                  <center><button class = "buttonx" type = "submit" name = "signup-submit">Finish Sign Up!</button></center>
                  <br>
                  <center><a id = "returnanim" class = "buttonx">Return to login</a></center>
                </center>
                </form>
              </div>
              <div class = "col-md-3">
              </div>
              </div>
          </div>
      </div>

      <!--This script handles animations between login and sign up page divs. -->
      <script>
      var sol = document.getElementById('signupoverlay');
      var aol = document.getElementById('accountoverlay');
        $("#signupanim").click(function() {
          $("#signupoverlay").removeClass('animated bounceOutLeft');
          $("#accountoverlay").removeClass('animated bounceInUp');
          $("#accountoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            aol.style.display = "none";
          }, 1000);
          setTimeout(function(){
            $("#signupoverlay").addClass('animated bounceInRight');
            sol.style.display = "block";
          }, 1000);
        });
      </script>
      <script>
      var sol = document.getElementById('signupoverlay');
      var aol = document.getElementById('accountoverlay');
        $("#returnanim").click(function(){
          $("#signupoverlay").removeClass('animated bounceInRight');
          $("#signupoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            sol.style.display = "none";
          }, 1000);
          setTimeout(function(){
            $("#accountoverlay").removeClass('animated bounceOutLeft');
            $("#accountoverlay").addClass('animated bounceInRight');
            aol.style.display = "block";
          }, 1000);
        });
      </script>
      <script>
        $("#aboutanim").click(function(){

        });
      </script>
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
      </div>
    </div>
    <div id = "footer">
      <div class = "container-fluid">
        <div class = "row">
          <div class = "col-md-1">
            <p id = "closedisclaimer">X</p>
          </div>
          <div class = "col-md-1">

          </div>
          <div class = col-md-8>
            <center><p id = "disclaimtxt">Disclaimer: This Virtual Enterprise online store is for educational purposes only (2018-2019 iKOMO). <br/> This site also uses cookies to ensure the best experience on our website.</p></center>
          </div>
          <div class = "col-md-2">
            <img id = "disclaimerimg" height = "70px" width = "auto" src = "./img/VE_mark_type.png"/>
          </div>
        </div>
      </div>
    </div>
    <script>
      var fol = document.getElementById('footer');

      $("#closedisclaimer").click(function(){
          fol.style.display = "none";
      });
    </script>
  </body>
<script>
  function progress (){
    var ol = document.getElementById('overlay');
    var hol = document.getElementById('hoverlay');
    var sol = document.getElementById("accountoverlay");
    var lol = document.getElementById('loggedin');
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
          lol.style.display = "block";
          $("#accountoverlay").addClass('animated bounceInUp');
          $("#shopButton").addClass("animated bounceInUp");
          $("#usernameanim").addClass("animated bounceInUp");
          $("#shopanim").addClass("animated bounceInUp");
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
