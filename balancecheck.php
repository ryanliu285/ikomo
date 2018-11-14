<?php
session_start();
if(isset($_SESSION['userID'])){
  if($_SESSION["userAMT"]>=100){
    echo "<script>window.location.href='./Crypto/mysql version/generator.php';</script>";
  }else{ //if user doesn't have enough money
    echo "<script>alert('You do not have enough KOMOcoins!');</script>";
  }
}else{ //if user hasn't logged in
    echo "<script>alert('Please log in!');</script>";
}
?>
