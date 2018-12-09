<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    .aboutbg{
    background-image: url("./img/aquatic.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
    #aboutoverlay1{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    display: block;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    }
    #aboutoverlay2{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    display: none;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    }
    #aboutoverlay3{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    display: none;
    }
    h2 {
      font-family: "Dimbo";
      font-size: 50px;
    }
    .message{
      height: 40vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 70vh;
    }
    .message2{
      height: 25vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 70vh;
    }
    .input {
      width: 70vh;
    }
    .inputx {
      background-color: rgba(0,0,0,0);
      border: none;
      border-bottom-width: 4px;
      border-bottom-style: solid;
      border-bottom-color: rgba(89, 154, 165, 0.92);
      font-family: "Dimbo";
      font-size: 18px;
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
.success {
  color: rgb(22, 187, 25);
  font-size: 24px;
  font-family: ("Dimbo");
}
.failed {
  color: rgb(175, 18, 47);
  font-size: 24px;
  font-family: ("Dimbo");
}
.center {
  margin: 0 auto;
}

  </style>
  </head>
<body class = "aboutbg">
  <div class= "container-fluid">
    <div class = "row">
      <div class = "col-md-3">

      </div>
      <div id = "aboutoverlay1" class = "col-md-6">
        <center><h2>View our Commercial!</h2> </center>
        <video height = "70%" width = "auto" controls>
          <source src = "./img/commercial.mp4">
          Your browser does not support video.
        </video>
        <br>
        <center><p id = "move1">---------></p></center>
      </div>
      <div id = "aboutoverlay2" class = "col-md-6">

      </div>
      <div id = "aboutoverlay3" class = "col-md-6">

      </div>
      <div class = "col-md-3">

      </div>
    </div>
  </div>
    </body>
</html>
