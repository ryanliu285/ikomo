<?php
session_start();

if(isset($_SESSION['sig'])){
  #user is already logged in.
  echo("<script>window.location = 'test.php'</script>");
}
if(isset($_REQUEST['submit'])){

  #perform login action
  $username = $_REQUEST['UserUsername'];
  $password = $_REQUEST['UserPassword'];

  include('db_login.php');
  $query = mysql_query("SELECT * FROM Users Where UserUsername ='".$username."' AND UserPassword = '".$password."' ");
  $row=mysql_fetch_array($query);
  if(empty($row)){
    #false info / User doesn't exist
    echo('<script>alert("Login failed!")</script>');
  }
  else {
    #user exists
    $_SESSION['sig']="OK";
  }
}
?>

<!DOCTYPE html>

<html>
<head>
  <meta charset = "utf-8">
  <title>Login to iKOMO</title>
</head>
<body>
<center>
  <form method = "post" action = "login.php">
    <input name = "UserUsername" type = "text" placeholder = "Enter your VEI Username">
    <br></br>
    <input name = "UserPassword" type = "text" placeholder = "Enter your password">
      <br></br>
    <input type ="submit" name = "submit" value = "submit">
      <br></br>
</center>
</body>
</html>
