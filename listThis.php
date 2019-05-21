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
$sql = 'SELECT * FROM owners WHERE StringID = \''.$sid.'\'';
$result = $conn->query($sql);
if ($result->num_rows >= 0) {
while($row = $result->fetch_assoc()){
$animal = $row["Animal"];
$rarity = $row["Rarity"];
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
echo '<script>console.log(\''.$animal.'\');</script>
<div class = "overlay '.$rarity.'img">
<a style = "margin: 0 5px 0 0; float:right; font-size: 20px;" onclick = "$(\'.overlay\').remove()">X</a>
<br>
<center><p style = "color: white; font-size: 50px;">'.$animal.'</p></center>
<center><p style = "color: white; font-size: 25px;">'.$rarity.'</p></center>
<center><img height = "200px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center>
<br>
<center><button onclick = "quickSell(\''.$sid.'\')">Quick Sell for '.$quickPrice.' KOMOcoins</button></center>
<br>
<center><input id = "priceInput" style = "width:50%;"type = "number" min = "0" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 && event.charCode <= 57" placeholder = "Enter KOMOcoin Price Here"><button onclick = "listFinal(\''.$sid.'\')">Submit</button></center>
</div>';
}}
mysqli_close($conn);
?>
