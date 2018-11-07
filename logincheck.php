<?php
session_start();
if(isset($_SESSION ['userID'])){
  echo '<script>window.location.replace("https://portal.veinternational.org/buybuttons/us021804/btn/pouch-of-komocoins-100-ik100/")</script>';
}else{
  echo "<script type='text/javascript'>alert('Please Log In!');</script>";
}
 ?>
