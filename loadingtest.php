<?php
 require "header.php";
 ?>
<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <style>
      #overlay {
        width: 100%;
        height: 100%;
        background-color: #F9F4D2;
        position: fixed;
        margin: -0.7%;

      }
      .percent-count {
        width: 450px;
        height: 50px;
        margin: 100px auto;
        text-align: center;
        color: #fff;
      }
      .progress-bar {
        width: 506px;
        height: 26px;
        background-color: #71DDE2;
        border-radius: 13px;
        margin: 50px auto;
      }
      .progress {
        width: 25px;
        height: 20px;
        border-radius: 10px;
        background-color: #34ABB7;
      }

    </style>
    <title>VEI iKOMO</title>
  </head>
  <br>
  <br>
  <br>
  <body class = "bg">
    <div id = "overlay">
        <div id = "percentCount" class = "percent-count">
            <img src = ""/>
        </div>
        <div class = "progress-bar">
          <div class = "progress" id = "progress"></div>
        </div>
    </div>
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-1">

        </div>
        <div id = "mainWelcomeText" class = "col-md-10">
            <p class = "titleText"></p>
        </div>
        <div class = "col-md-1">

        </div>
      </div>
    </div>
  </body>
<script>
  function progress (){
    var prg = document.getElementById('progress');
    var percent = document.getElementById('percentCount');
    var counter = 5;
    var progress = 25;
    var id = setInterval(frame,50);

    function frame(){
      if(progress == 500 && counter == 100){
        clearInterval(id);
      }
      else{
        progress += 10;
        counter +=2;
        prg.style.width = progress + 'px';
        percent.innerHTML = counter + '%';
      }
    }
  }

  progress ();
</script>
<script>
  var ol = document.getElementById("overlay");
  window.addEventListener("load", function() {

    ol.style.display="none";

  });
</script>
 </html>
