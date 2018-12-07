<?php
session_start();
 $sid = $_POST['data'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";
 $animal;
 $rarity;
 $type;
 $UID;
 $price;
 $coins;
 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }

$id = $_SESSION["userID"];

$sql = 'SELECT * FROM marketplace WHERE StringID = \''.$sid.'\'';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
$animal = $row["Animal"];
$rarity = $row["Rarity"];
$type = $row["Type"];
$UID = $row["UID"];
$price = $row["Price"];
  }

$sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$id.'';
$result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
if($result>=$price){
  $sub = $result- $price;
  $sql = 'UPDATE iKOMODB SET KOMOcoins = '.$sub.' WHERE idUsers = '.$id.'';
  $result = $conn -> query($sql);
}
if($result>=$price){
$sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$UID.'';
$result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
$sum = $result + $price;
$sql = 'UPDATE iKOMODB SET KOMOcoins = '.$sum.' WHERE idUsers = '.$UID.'';
$result = $conn -> query($sql);
$sql = 'UPDATE owners SET UID = '.$id.'
WHERE StringID = \''.$sid.'\'';
$result = mysqli_query($conn,$sql);
$sql = 'DELETE FROM marketplace WHERE StringID = \''.$sid.'\'';
$result = mysqli_query($conn,$sql);

mysqli_close($conn);

echo '<script>if(alert("Buying Successful!")){ window.location.reload();}
else  {window.location.reload();} </script>';
}
else{
  echo '<script>alert("Not enough KOMOcoins!")</script>';
}

}else{
echo '<script>alert("iKOMO no longer available! Sorry!")</script>';
}
?>
