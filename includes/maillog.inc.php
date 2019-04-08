<?php
if(isset($_POST['mail-submit'])){
  $to = 'brandonh.lee617@gmail.com';
  $subject = 'VEI iKOMO Support Message';
  $message = $_POST['Message'];
  $headers = 'From: brandonlee102001@gmail.com' ."\r\n";
  $success = mail('brandonh.lee617@gmail.com', 'iKOMO Support', $message, $headers);
  if($success == true){
  header('Location: ../index.php?error=emailsent');
}
}
 ?>
