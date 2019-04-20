<?php
require 'header.php';
require './includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .arcade {
      background-image: url("./img/arcade.gif");
      background-size: cover;
    }
    #arcadeoverlay{
      margin-top: 20px;
      height: 500px;
      width: 500px;
      background-color: rgba(255, 255, 255, 0.98);
    }
    h2 {
      font-family: "Dimbo";
      font-size: 30px;
      color: #EBCB5A;
    }
    h1 {
      margin-top: 20px;
      font-family: "Dimbo";
      font-size: 50px;
      color: #59AEC7;
    }
    .counter {
      color: #59AEC7;
      margin-top: 5%;
      font-size: 50px;
    }
    #count {
      margin-top: 2%;
      color: #EBCB5A;
      font-size: 50px;
    }
    </style>
  </head>
<body class = "arcade">

  <div class = "container-fluid">
        <div class = "row">
          <div class = "col-md-3">

          </div>

          <div id = "arcadeoverlay" class = "col-md-6">
              <center>
              <h1>iKOMO Arcade coming soon</h1>
              <h2>Thank you for supporting iKOMO. With your help, we've been able to fund the arcade and launch our first private beta. Check your emails as we hand out access codes in the coming weeks!</h2>
              <h2>Estimated public release date: 2/19/19</h2>
              <p class = "counter"></p>
            </center>
          </div>

          <div class = "col-md-3">

          </div>
        </div>
    </div>
</body>
</html>
