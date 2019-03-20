<?php
session_start();
$id = $_SESSION['userID'];
 $rarityChange = $_POST['rarityChange'];
 $value = $_POST['search'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }

if($rarityChange == 'legendary'){
  $sql = "SELECT * FROM owners WHERE Rarity = 4 AND UID = '$id'";
}else if ($rarityChange == 'epic'){
  $sql = "SELECT * FROM owners WHERE Rarity = 3 AND UID = '$id'";
}else if ($rarityChange == 'rare'){
  $sql = "SELECT * FROM owners WHERE Rarity = 2 AND UID = '$id'";
}else if ($rarityChange == 'common'){
  $sql = "SELECT * FROM owners WHERE Rarity = 1 AND UID = '$id'";
}else{
  $sql = "SELECT * FROM owners WHERE UID = '$id'";
}

 $result = $conn->query($sql);

 if ($result->num_rows >= 0) {
   // output data of each row and check stringID
   while($row = $result->fetch_assoc()) {
     $animal = $row["Animal"];
     $origname = $animal;
     $animal = strtolower(preg_replace('/\s+/', '', $animal));
     $value = strtolower(preg_replace('/\s+/', '', $value));
       if($value === ""||!is_bool(strpos($animal, $value))){
   $animal = $row["Animal"];
       $sid = $row["StringID"];
       $rarity = $row["Rarity"];
       if($rarity == 1){
         $rarity = "common";
         $rarityU = "Common";
       }
       else if($rarity == 2){
         $rarity = "rare";
         $rarityU = "Rare";
       }
       else if($rarity == 3){
         $rarity = "epic";
           $rarityU = "Epic";
       }
       else{
         $rarityU = "Legendary";
         $rarity = "legendary";
       }
       if($row["Type"] == 1){
         $type = 'Domestic';
       }else if ($row["Type"] == 2){
         $type = 'Aquatic';
       }else if ($row["Type"] == 3){
         $type = 'Wild';
       }else{
         $type = 'Mythic';
       }
       echo '<div class = "col-md-4 ikomoAnimal"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><center><p>'.$animal.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarityU.'</p></center><br><br></div>';
     }}
   mysqli_close($conn);
 }
 ?>
