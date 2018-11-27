<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
  </head>
<body class = "marketbg">
  <div id = mainWelcomeText>
    <h1>Marketplace</h1>
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
