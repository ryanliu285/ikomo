<?php
session_start();
 $sid = $_POST['data'];
 $price = $_POST['price'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";
 $animal;
 $rarity;
 $type;
 $UID;
 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }
$id = $_SESSION["userID"];
$sql = 'SELECT * FROM owners WHERE StringID = \''.$sid.'\'';
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
while($row = $result->fetch_assoc()){
$animal = $row["Animal"];
$rarity = $row["Rarity"];
$type = $row["Type"];
$UID = $row["UID"];
  }
}

$sql = "INSERT INTO marketplace ".
          "(StringID, UID, Rarity, Type, Animal, Price) "."VALUES ".
          "('$sid',$UID,$rarity,$type,'$animal',$price)";
$conn -> query($sql);

mysqli_close($conn);

echo '<script>location.reload();</script>';
?>
