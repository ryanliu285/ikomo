<?php
session_start();
 $sid = $_POST['data'];
 $servername = "db5000072625.hosting-data.io";
 $dBUsername = "dbu230478";
 $dBPassword = "SPdidsway1st";
 $dbName = "dbs67209";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }
$id = $_SESSION["userID"];
$sql = 'SELECT * FROM marketplace WHERE StringID = \''.$sid.'\'';
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
while($row = $result->fetch_assoc()){
$animal = $row["Animal"];
$rarity = $row["Rarity"];
$price = $row["Price"];
if($rarity == 1){
  $rarity = "common";
}
else if($rarity == 2){
  $rarity = "rare";
}
else if($rarity == 3){
  $rarity = "epic";
}
else{
  $rarity = "legendary";
}
echo '<script>console.log(\''.$animal.'\');</script>
<div class = "overlay '.$rarity.'img">
<a style = "margin: 0 5px 0 0; float:right; font-size: 20px;" onclick = "$(\'.overlay\').remove()">X</a>
<br>
<center><p style = "color: white; font-size: 50px;">'.$animal.'</p></center>
<center><p style = "color: white; font-size: 25px;">'.$rarity.'</p></center>
<center><img height = "200px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center>
<center><p style = "color: white; font-size: 35px;">This iKOMO is on sale in the marketplace for '.$price.' KOMOcoins</p></center>
<center><button onclick = "unlistFinal(\''.$sid.'\')">Unlist</button></center>
</div>';
}}
mysqli_close($conn);
?>
