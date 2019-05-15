<?php

$servername = "db5000072625.hosting-data.io";
$dBUsername = "dbu230478";
$dBPassword = "SPdidsway1st";
$dbName = "dbs67209";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
