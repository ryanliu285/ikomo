<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
