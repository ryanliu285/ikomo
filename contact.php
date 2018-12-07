<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .contactbg{
    background-image: url("./img/wild.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
    #contactoverlay{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
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
      width: 90vh;
    }
    .message2{
      height: 25vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 90vh;
    }
    .input {
      width: 90vh;
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
  </style>
  </head>
<body class = "contactbg">
<div class= "container-fluid">
  <div class = "row">
    <div class = "col-md-3">

    </div>
    <div id = "contactoverlay" class = "col-md-6">
      <center>
         <h2>Contact Us!</h2>
                    <form class = "contactform" action = "includes/maillog.inc.php" method = "post">
                    <input class = "inputx input" type = "text" name = "Email" placeholder = "Email" required>
                    <br>
                    <br>
                    <input class = "inputx input" type = "text" name = "User" placeholder = "Username" required>
                    <br>
                    <br>
                    <textarea class = "message2 inputx" type = "text" name = "Message" placeholder = "Message" required></textarea>
                    <br>
                    <br>
                    <button class = "buttonx" type = "submit" name = "mail-submit">Send Email.</button></form>';
      </center>
    </div>
    <div class = "col-md-3">

    </div>
  </div>
</div>
</body>
<?php

?>
</html>
