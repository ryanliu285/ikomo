<?php
 require "header.php";
 ?>
<!DOCTYPE html>
 <html>
  <head>
    <style>
    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 75px;
      background-color: rgba(0, 0, 0, 0.5);
    }
    #closedisclaimer{
      color: white;
    }
    #closedisclaimer:hover{
      cursor: pointer;
    }
    #disclaimtxt{
      color: white;
    }
    </style>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>VEI iKOMO</title>
  </head>
  <br>
  <br>
  <br>
  <body class = "bgstore">
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-1">

        </div>
        <script>
        var x;
        var amt;
        function append(){
          $("#mainWelcomeText").append(x);
        }
        function komo100(){
          amt = 100;
          logincheck(amt);
        }
        function komo500(){
          amt = 500;
          logincheck(amt);
        }
        function komo1000(){
          amt = 1000;
          logincheck(amt);
        }
        function komo2000(){
          amt = 2000;
          logincheck(amt);
        }
        function komo5000(){
          amt = 5000;
          logincheck(amt);
        }
        function logincheck(amt){
          console.log("Check started");
          var url = "logincheck" + amt + ".php";
          $.ajax({
            type: "GET",
            url: url,
            data: { }
          }).done(function( msg ) {
            x = msg;
            console.log("Check ended");
            append();
          });
        }
        </script>
        <div id = "mainWelcomeText" class = "col-md-10">
            <a onclick="komo100()"><button id = "buyButton100">Pouch of KOMOcoins (100)</button></a>
            <a onclick="komo500()"><button id = "buyButton500">Sack of KOMOCoins (500)</button></a>
            <a onclick="komo1000()"><button id = "buyButton1000">Chest of KOMOCoins (1000)</button></a>
            <a onclick="komo2000()"><button id = "buyButton2000">Barrel of KOMOCoins (2000)</button></a>
            <a onclick="komo5000()"><button id = "buyButton5000">Truck of KOMOCoins (5000)</button></a>
        </div>
        <div class = "col-md-1">

        </div>
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
            <br>
            <center><p id = "disclaimtxt">Disclaimer: This Virtual Enterprise online store is for educational purposes only (2018-2019 iKOMO).</p></center>
          </div>
          <div class = "col-md-2">

          </div>
        </div>
      </div>
    </div>
  <script>
  var fol = document.getElementById('footer');

  $("#closedisclaimer").click(function(){
    $("#footer").addClass('animated bounceOutDown');
    setTimeout(function(){
      fol.style.display = "none";
    }, 2000);
  });
  </script>
  </body>
 </html>
