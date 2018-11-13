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
      .buttonx:hover{
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
      #footer {
        font-family: "Dimbo";
        font-size: 25px;
        background-color: rgb(234, 254, 252);
        border-top-color: rgb(89, 154, 165);
        border-top-width: 5px;
      }
      #vei {
        margin-top: 5px;
        margin-bottom: 5px;
      }
      #disclaimer {
        margin-top: 20px;
      }
      #signupoverlay {
        margin: auto;
        width: 50%;
        height: 550px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: block;
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
    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
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
                <center><h2>Signup</h2></center>
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
                <form action = "includes/signup.inc.php" method = "post">
                  <center><input class = "inputx" type = "text" name = "uid" placeholder= "VEI Username">
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
                  <button class = "buttonx" type = "submit" name = "signup-submit">Finish Sign Up!</button>
                  <br>
                  <br>
                  <a href = "index.php">
                  <button class = "buttonx">Return to login.</button>
                </a>
                </center>
                </form>
              </div>
              <div class = "col-md-3">
              </div>
              </div>
          </div>
      </div>
  </body>


 </html>
