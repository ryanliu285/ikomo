<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .comingsoonbg{
    background-image: url("img/soon.png");
    width auto;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
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
  </style>
  </head>
<body class = "comingsoonbg">
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
</body>
<script>
var fol = document.getElementById('footer');

$("#closedisclaimer").click(function(){
  $("#footer").addClass('animated bounceOutDown');
  setTimeout(function(){
    fol.style.display = "none";
  }, 2000);
});
</script>
</html>
