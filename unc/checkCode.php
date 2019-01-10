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

 $sql = "SELECT * FROM Codes WHERE code = \''.$value.'\'";
 $result = $conn->query($sql);
   $times = 0;

 if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
      if(!($row["used"])){ //if not used
        $eggsTemp = $row["eggs"];
        if($eggsTemp == 'five'){
          $eggs = 5;
        }else if ($eggsTemp == 'ten'){
          $eggs = 10;
        }else if ($eggsTemp == 'twenty'){
          $eggs = 20;
        }else{
          $eggs = 50;
        }
        echo '<script>
        var eggs = '.$eggs.';
        $.ajax({
          type: "POST",
          url: "./Crypto/mysql version/generatorMult.php",
          data: {"data": eggs},
          success: function(msg) {
            x = msg;
            console.log("Check ended");
            append();
          }
        });
        </script>';
      }else{//if used
        echo '<p style = "color:red;"> ERROR: Code already used </p>';
      }
   }else{
     echo '<p style = "color:red;"> ERROR: Code does not exist </p>';
   }
   mysqli_close($conn);
 ?>
