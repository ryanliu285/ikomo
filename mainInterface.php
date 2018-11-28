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
    #footer {
      font-family: "Dimbo";
      font-size: 25px;
      background-color: rgb(234, 254, 252);
      border-top-color: rgb(89, 154, 165);
      border-top-width: 5px;
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
    .signtxt{
      font-size: 14px;
    }
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
      background-color: #F7E188;
      font-size: 24px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 60%;
    }
    .bigbt:hover {
      cursor: pointer;
    }
    #loggedin {
      display: none;
    }
    #buyButton {
      float:left;
    }
    #buyButton2 {
      float:right;
    }
    #iKOMOoverlay{
      display: none;
      z-index: 100000;
      height: 300px;
      width: auto;
      position: absolute;
      margin-top: 5%;
      margin-left: 70%;
    }
    #COINoverlay{
      display: none;
      z-index: 100000;
      height: 175px;
      width: auto;
      position: absolute;
      margin-top: 12%;
      margin-left: 80%;
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
        <div class = "col-md-3">
        </div>
        <div id = "mainWelcomeText" class = "col-md-5">
          <img id = "iKOMOoverlay" src = "./img/ikomos/bunny.png"/>
          <img id = "COINoverlay" src = "./img/ikocoin.png"/>
            <a onclick="window.location.href = './buycoins.php'"><button class = "bigbt" id = "buyButton">Buy KOMOcoins!</button></a>
            <a onclick="balancecheck()"><button class = "bigbt" id = "buyButton2">Buy iKOMO!</button></a>
            <script>
            var ikool = document.getElementById('iKOMOoverlay');
            var cool = document.getElementById('COINoverlay');
              $("#buyButton").mouseover(function(){
                cool.style.display = "block";
              });
              $("#buyButton").mouseout(function(){
                cool.style.display = "none";
              });
              $("#buyButton2").mouseover(function(){
                ikool.style.display = "block";
              });
              $("#buyButton2").mouseout(function(){
                ikool.style.display = "none";
              });
            </script>
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
        <div class = "col-md-4">

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
