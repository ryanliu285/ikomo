<?php
require 'header.php';
?>

<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <div>
      <h1>Redeem Code</h1>
    </div>
    <div class = "row">
      <p class = "col-sd-3">Please Enter Your Code Here:</p>
      <input class = "col-sd-6" type="text" placeholder = "Code"></input>
      <button onclick = "startRedemption()">Redeem</button>
    </div>
    <script>
      function startRedemption(){
          $.ajax({
            type: "POST",
            url: "./unc/checkCode.php",
            data: {'data': value},
            success: function(msg) {
              x = msg;
              console.log("Check ended");
              append();
            }
          });
        }
    </script>
  </body>
 </html>
