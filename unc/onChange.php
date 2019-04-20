<?php
session_start();
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

 $sql = "SELECT * FROM marketplace";
 $result = $conn->query($sql);
   $times = 0;

 if ($result->num_rows >= 0) {

   // output data of each row and check stringID
   $oldsession = $_SESSION['change'];
   $_SESSION['change'] = $_SESSION['change'] + 1;
   while($row = $result->fetch_assoc()) {
   $animal = $row["Animal"];
   $origname = $animal;
   $animal = strtolower(preg_replace('/\s+/', '', $animal));
   $value = strtolower(preg_replace('/\s+/', '', $value));
     if(!is_bool(strpos($animal, $value)) || $value === ""){
       $sid = $row["StringID"];
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
       $times++;
       echo '<script>var oldsession = '.$oldsession.';
       var times = '.$times.'</script>
         <div class = "col-md-4" id = "'.$_SESSION['change'].'"><a onclick = "buyScreen(\''.$sid.'\')"><center><img class = "'.$rarity.'img" height = "300px" width = "auto" src = "./img/ikomos/'.$animal.'.png" alt = "Sorry, iKOMO coming soon!"></center><center><p id = "price">'.$row['Price'].'</p></center><center><p>'.$origname.' | '.$type.'</p></center><center><p class = "'.$rarity.'txt">'.$rarity.'</p></center></a><br><br></div>';

     }
   }
   mysqli_close($conn);
 }
 ?>
