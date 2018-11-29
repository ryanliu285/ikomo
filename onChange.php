<?php
 $value = $_POST['data'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

ob_start();
 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }

 $sql = "SELECT Animal FROM marketplace";
 $result = $conn->query($sql);

 if ($result->num_rows >= 0) {

   // output data of each row and check stringID
   while($row = $result->fetch_assoc()) {
     if(strpos($row["Animal"], $value)){
       $rarity = $row["Rarity"];
       $animal = $row["Animal"];
       if($row["Type"] == 1){
         $type = 'Domestic';
       }else if ($row["Type"] == 2){
         $type = 'Aquatic';
       }else if ($row["Type"] == 3){
         $type = 'Wild';
       }else{
         $type = 'Mythic';
       }
       $origname = $animal;
       $rarity = preg_replace('/\s+/', '', $rarity);
       $animal = preg_replace('/\s+/', '', $animal);
       echo '<div class = "col-md-4"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>'.$origname.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarity.'</p></center><br><br></div>';

     }
   }
 }
 ?>
