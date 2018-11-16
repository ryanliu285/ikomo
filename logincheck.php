<?php
session_start();
if(isset($_SESSION ['userID'])){
}else{
  echo "<script type='text/javascript'>alert('Please Log In!');</script>";
}
 ?>
