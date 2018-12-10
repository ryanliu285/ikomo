<?php
 require "header.php";
 ?>
<!DOCTYPE html>
 <html>
  <head>
    <style>

    @media only screen and (min-width: 1600px) {
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
    .bigbt{
      background-color: #F7E188;
      font-size: 18px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 40%;
    }
    .bigbt:hover {
      cursor: pointer;
      background-color: #daba38;
    }
    #POUCHoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #SACKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #CHESToverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 17%;
      margin-left: 67%;
    }
    #BARRELoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #TRUCKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 17%;
      margin-left: 67%;
    }
    .centerpls {
      text-align: center;
    }
  }
    @media only screen and (min-width: 1080px) {
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
    .bigbt{
      background-color: #F7E188;
      font-size: 18px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 30%;
    }
    .bigbt:hover {
      cursor: pointer;
      background-color: #daba38;
    }
    #POUCHoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 8%;
      margin-left: 68%;
    }
    #SACKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 8%;
      margin-left: 68%;
    }
    #CHESToverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 10%;
      margin-left: 67%;
    }
    #BARRELoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 8%;
      margin-left: 67%;
    }
    #TRUCKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 10%;
      margin-left: 67%;
    }
    .centerpls {
      text-align: center;
    }
  }
    @media only screen and (min-width: 1536px) {
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
      .bigbt{
        background-color: #F7E188;
        font-size: 18px;
        font-family: "Dimbo";
        text-decoration: none;
        text-align: center;
        border: none;
        border-bottom-color:  #daba38;
        border-bottom-width: 3px;
        border-bottom-style: solid;
        margin-top: 40%;
      }
      .bigbt:hover {
        cursor: pointer;
        background-color: #daba38;
      }
      #POUCHoverlay{
        display: none;
        z-index: 100000;
        height: 24.2546296vh;
        width: auto;
        position: absolute;
        margin-top: 9%;
        margin-left: 67%;
      }
      #SACKoverlay{
        display: none;
        z-index: 100000;
        height: 24.2546296vh;
        width: auto;
        position: absolute;
        margin-top: 9%;
        margin-left: 67%;
      }
      #CHESToverlay{
        display: none;
        z-index: 100000;
        height: 24.2546296vh;
        width: auto;
        position: absolute;
        margin-top: 11%;
        margin-left: 67%;
      }
      #BARRELoverlay{
        display: none;
        z-index: 100000;
        height: 24.2546296vh;
        width: auto;
        position: absolute;
        margin-top: 9%;
        margin-left: 67%;
      }
      #TRUCKoverlay{
        display: none;
        z-index: 100000;
        height: 24.2546296vh;
        width: auto;
        position: absolute;
        margin-top: 11%;
        margin-left: 67%;
      }
      .centerpls {
        text-align: center;
      }
      }
    @media only screen and (min-width: 1920px) {
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
    .bigbt{
      background-color: #F7E188;
      font-size: 18px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 50%;
    }
    .bigbt:hover {
      cursor: pointer;
      background-color: #daba38;
    }
    #POUCHoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #SACKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #CHESToverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 17%;
      margin-left: 67%;
    }
    #BARRELoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 15%;
      margin-left: 67%;
    }
    #TRUCKoverlay{
      display: none;
      z-index: 100000;
      height: 23.1vh;
      width: auto;
      position: absolute;
      margin-top: 17%;
      margin-left: 67%;
    }
    .centerpls {
      text-align: center;
    }
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
        <div id = "mainWelcomeText" class = "centerpls col-md-9">
          <img id = "POUCHoverlay" src = "./img/pouch.png"/>
          <img id = "SACKoverlay" src = "./img/sack.png"/>
          <img id = "CHESToverlay" src = "./img/chest.png"/>
          <img id = "BARRELoverlay" src = "./img/barrel.png"/>
          <img id = "TRUCKoverlay" src = "./img/truck.png"/>
            <a onclick="komo100()"><button class = "bigbt" id = "buyButton100">Pouch of KOMOcoins (100)<br>$25</button></a>
            <a onclick="komo500()"><button class = "bigbt" id = "buyButton500">Sack of KOMOCoins (500)<br>$120</button></a>
            <a onclick="komo1000()"><button class = "bigbt" id = "buyButton1000">Chest of KOMOCoins (1000)<br>$230</button></a>
            <a onclick="komo2000()"><button class = "bigbt" id = "buyButton2000">Barrel of KOMOCoins (2000)<br>$450</button></a>
            <a onclick="komo5000()"><button class = "bigbt" id = "buyButton5000">Truck of KOMOCoins (5000)<br>$1200</button></a>
            <script>
            var pch = document.getElementById('POUCHoverlay');
            var sck = document.getElementById('SACKoverlay');
            var chst = document.getElementById('CHESToverlay');
            var brrl = document.getElementById('BARRELoverlay');
            var trck = document.getElementById('TRUCKoverlay');
              $("#buyButton100").mouseover(function(){
                pch.style.display = "block";
              });
              $("#buyButton100").mouseout(function(){
                pch.style.display = "none";
              });
              $("#buyButton500").mouseover(function(){
                sck.style.display = "block";
              });
              $("#buyButton500").mouseout(function(){
                sck.style.display = "none";
              });
              $("#buyButton1000").mouseover(function(){
                chst.style.display = "block";
              });
              $("#buyButton1000").mouseout(function(){
                chst.style.display = "none";
              });
              $("#buyButton2000").mouseover(function(){
                brrl.style.display = "block";
              });
              $("#buyButton2000").mouseout(function(){
                brrl.style.display = "none";
              });
              $("#buyButton5000").mouseover(function(){
                trck.style.display = "block";
              });
              $("#buyButton5000").mouseout(function(){
                trck.style.display = "none";
              });
            </script>
        </div>
        <div class = "col-md-2">

        </div>
      </div>
  </body>
 </html>
