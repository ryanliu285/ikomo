<?php
session_start();
echo $_SESSION["userID"];
$id = $_SESSION["userID"];
$dbhost = 'db759106289.hosting-data.io';
$dbuser = 'dbo759106289';
$dbpass = 'SPdidsway1st';
$dbname = 'db759106289';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn ) {
   die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$id.'';
$coins = 0;
if(!(mysqli_query($conn, $sql))){
  echo "failed";
}
$result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
$coins = $result+=100;
echo $coins;
$sql = 'UPDATE iKOMODB SET KOMOcoins = '.$coins.' WHERE idUsers = '.$id.'';
$result = mysqli_query($conn,$sql);
mysqli_close($conn);
echo "<script>window.location.href='./mainInterface.php';</script>";
exit();
?>
