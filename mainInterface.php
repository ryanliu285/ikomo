<?php
 require "header.php";
 ?>
<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>VEI iKOMO</title>
  </head>
  <br>
  <br>
  <br>
  <body class = "bg">
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-1">

        </div>
        <div id = "mainWelcomeText" class = "col-md-10">
            <p class = "titleText">Welcome!</p>
            <a onclick="logincheck()"><button id = "buyButton">Buy KOMOcoins!</button></a>
            <a onclick="balancecheck()"><button id = "buyButton2">Buy iKOMO!</button></a>
            <script>
            var x;
            function logincheck(){
              $("#buyButton").prop("disabled",true);
              console.log("Check started");
              $.ajax({
                type: "GET",
                url: "logincheck.php",
                data: {  }
              }).done(function( msg ) {
                x = msg;
                console.log("Check ended");
                append();
              });
            }
            function append(){
              $("#mainWelcomeText").append(x);
            }
            function balancecheck(){
              console.log("Check started");
              $.ajax({
                type: "GET",
                url: "balancecheck.php",
                data: {  }
              }).done(function( msg ) {
                x = msg;
                console.log("Check ended");
                append();
              });
            }
            </script>
        </div>
        <div class = "col-md-1">

        </div>
      </div>
    </div>
  </body>
 </html>
