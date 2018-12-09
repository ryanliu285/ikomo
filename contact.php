<?php
require 'header.php';
use PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
include_once "PHPMailer/SMTP.php";
if(isset($_POST['mail-submit'])) {
  $subject = 'VEI iKOMO Support';
  $email = $_POST['email'];
  $user = $_POST['user'];
  $message = $_POST['message'];
  $mail = new PHPMailer();

  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; //587
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls"; //TLS
  $mail->Username = "brandonh.lee617@gmail.com"; //ikomo.vei@gmail.com
  $mail->Password = "Brand0nl33"; //cryptokingdom19

  $mail->setFrom($email);
  $mail->addAddress('ikomo.vei@gmail.com');
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = $message;

  if($mail->send()){
    $msg = "1";
  }
  else {
    $msg = "2";
  }
}
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
      width: 70vh;
    }
    .message2{
      height: 25vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 70vh;
    }
    .input {
      width: 70vh;
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
.success {
  color: rgb(22, 187, 25);
  font-size: 24px;
  font-family: ("Dimbo");
}
.failed {
  color: rgb(175, 18, 47);
  font-size: 24px;
  font-family: ("Dimbo");
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
         <?php if ($msg == 1){
           echo '<p class = "success">Email Sent!</p>';
         } else {
           if($msg ==2){
           echo '<p class = "failed">Invalid Email Address.</p>';
           }
           else {

           }
         }
          ?>
                    <form class = "contactform" action = "contact.php" method = "post">
                    <input class = "inputx input" type = "text" name = "email" placeholder = "Email" required>
                    <br>
                    <br>
                    <input class = "inputx input" type = "text" name = "user" placeholder = "Username" required>
                    <br>
                    <br>
                    <textarea class = "message2 inputx" type = "text" name = "message" placeholder = "Message" required></textarea>
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
