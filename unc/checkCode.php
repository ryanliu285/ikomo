<?php
session_start();
 $value = $_POST['data'];
 $servername = "db759106289.hosting-data.io";
 $dBUsername = "dbo759106289";
 $dBPassword = "SPdidsway1st";
 $dbName = "db759106289";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }

 $sql = "SELECT * FROM Codes WHERE code = '.$value.'";
 $result = $conn->query($sql);
   $times = 0;

 if ($result->num_rows >= 0) {
      if(!($result["used"])){ //if not used
        $eggsTemp = $result["eggs"];
        if($eggsTemp == 'five'){
          $eggs = 5;
        }else if ($eggsTemp == 'ten'){
          $eggs = 10;
        }else if ($eggsTemp == 'Twenty'){
          $eggs = 20;
        }else{
          $eggs = 50;
        }
        echo 'var eggs = '.$eggs.';
        $.ajax({
          type: "POST",
          url: "./Crypto/mysql version/generatorMult.php",
          data: {"data": eggs},
          success: function(msg) {
            x = msg;
            console.log("Check ended");
            append();
          }
        });';
      }else{//if used
        echo '<p style = "color:red;"> ERROR: Code already used </p>';
      }
   }
   mysqli_close($conn);
 ?>
