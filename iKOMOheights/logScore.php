<?php
session_start();
$score =  $_POST['data'];
$_SESSION['scoreHeights'] = $score;
$user = $_SESSION ['userUID'];
$servername = "db5000072625.hosting-data.io";
$dBUsername = "dbu230478";
$dBPassword = "SPdidsway1st";
$dbName = "dbs67209";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
$sql = "INSERT INTO HeightsScore VALUES ('.$score.','$user')";

if($conn -> query($sql)==TRUE){
}else{
  echo '<script>alert(\'Failed, please take a screenshot and contact us through the contact page!\')</script>';
}

echo '<script>window.location.href = "./gameover.php"</script>';
?>
