<?php
session_start();
$id = $_SESSION['userID'];
 $value = $_POST['search'];
 $rarityChange = $_POST['rarityChange'];
 $sortChange = $_POST['sortChange'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }
 if($sortChange == 'ul'){
   $sql = "SELECT * FROM owners ";
 }else{
   $sql = "SELECT * FROM marketplace ";
 }
 if($rarityChange == 'legendary'){
   $sql .= "WHERE Rarity = 4 AND UID = '$id'";
 }else if ($rarityChange == 'epic'){
   $sql .= "WHERE Rarity = 3 AND UID = '$id'";
 }else if ($rarityChange == 'rare'){
   $sql .= "WHERE Rarity = 2 AND UID = '$id'";
 }else if ($rarityChange == 'common'){
   $sql .= "WHERE Rarity = 1 AND UID = '$id'";
 }else{
   $sql .= "WHERE UID = '$id'";
 }
 $result = $conn->query($sql);

 if ($result->num_rows >= 0) {
   // output data of each row and check stringID
   while($row = $result->fetch_assoc()) {
   $animal = $row["Animal"];
   $origname = $animal;
   $animal = strtolower(preg_replace('/\s+/', '', $animal));
   $value = strtolower(preg_replace('/\s+/', '', $value));
     if(!is_bool(strpos($animal, $value)) || $value === ""){
       $rarity = $row["Rarity"];
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
       if($row["Type"] == 1){
         $type = 'Domestic';
       }else if ($row["Type"] == 2){
         $type = 'Aquatic';
       }else if ($row["Type"] == 3){
         $type = 'Wild';
       }else{
         $type = 'Mythic';
       }
       $sid = $row['StringID'];

       $newSql = "SELECT * FROM marketplace WHERE StringID = '$sid'";
       $newResult = $conn->query($newSql);

       if ($newResult->num_rows > 0) {
       if($sortChange == "l"){
         echo '<div class = "col-md-4 ikomoAnimal" id = "'.$_SESSION['change'].'"><a onclick = "unlist(\''.$sid.'\')"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><p>'.$origname.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarity.'</p></center><br><br></a></div>';
        }
       }else{
         if($sortChange == "ul"){
        echo '<div class = "col-md-4 ikomoAnimal" id = "'.$_SESSION['change'].'"><a onclick = "list(\''.$sid.'\')"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><p>'.$origname.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarity.'</p></center><br><br></a></div>';
      }
      }
     }
   }
   mysqli_close($conn);
 }
 ?>
