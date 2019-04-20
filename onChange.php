<?php
session_start();
 $rarityChange = $_POST['rarityChange'];
 $sortChange = $_POST['sortChange'];
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
  $sql = "SELECT * FROM marketplace WHERE Rarity = 4";
}else if ($rarityChange == 'epic'){
  $sql = "SELECT * FROM marketplace WHERE Rarity = 3";
}else if ($rarityChange == 'rare'){
  $sql = "SELECT * FROM marketplace WHERE Rarity = 2";
}else if ($rarityChange == 'common'){
  $sql = "SELECT * FROM marketplace WHERE Rarity = 1";
}else{
  $sql = "SELECT * FROM marketplace";
}
if($sortChange == 'plh'){
  $sql .= ' ORDER BY Price ASC';
}else{
  $sql .= ' ORDER BY Price DESC';
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
       echo '<div class = "col-md-4 ikomoAnimal"><a onclick = "buyScreen(\''.$sid.'\')"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><p id = "price">'.$row['Price'].'</p></center><center><p>'.$animal.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarityU.'</p></center></a><br><br></div>';
     }}
   mysqli_close($conn);
 }
 ?>
