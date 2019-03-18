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
 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }
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
$sql = 'DELETE FROM owners WHERE StringID = \''.$sid.'\'';
$result = $conn->query($sql);
if($rarity == 1){
  $rarity = "common";
  $quickPrice = 10;
}
else if($rarity == 2){
  $rarity = "rare";
  $quickPrice = 25;
}
else if($rarity == 3){
  $rarity = "epic";
  $quickPrice = 60;
}
else{
  $rarity = "legendary";
  $quickPrice = 150;
}
$sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$UID.'';
$result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
$sum = $result + $quickPrice;
$sql = 'UPDATE iKOMODB SET KOMOcoins = '.$sum.' WHERE idUsers = '.$UID.'';
$result = $conn -> query($sql);
echo '<script>if(alert("Quick Sell for '.$quickPrice.' KOMOcoins Successful!")){ window.location.reload();}
else  {window.location.reload();} </script>';

?>
