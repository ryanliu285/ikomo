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
$sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = "10"';
$coins = 0;
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
      $coins = $row["KOMOcoins"]+=100;
}
echo $coins;
  $sql = 'UPDATE iKOMODB WHERE idUsers = '.$id.''.
            "(KOMOcoins) "."VALUES ".
            "('$coins')";
?>
