<?php
session_start();
$score =  $_POST['data'];
$user = $_SESSION ['userUID'];
$servername = "db759106289.hosting-data.io";
$dBUsername = "dbo759106289";
$dBPassword = "SPdidsway1st";
$dbName = "db759106289";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
$sql = "INSERT INTO TennisScore ".
          "(score,user) "."VALUES ".
          "($score, '$user')";

if($conn -> query($sql)==TRUE){
  echo '<script>alert(\'GAME OVER!\')</script>';
}else{
  echo '<script>alert(\'Failed, please take a screenshot and contact us through the contact page!\')</script>';
}

echo '<script>window.location.href = "./gameover.php"</script>';
?>
