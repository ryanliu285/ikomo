<?php
session_start();
 $value = $_POST['data'];
 $dbhost = 'db5000072625.hosting-data.io';
 $dbuser = 'dbu230478';
 $dbpass = 'SPdidsway1st';
 $dbname = 'dbs67209';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if(! $conn ) {
    die('Could not connect: ' . mysql_error());
 }


 $quer = "SELECT * FROM Codes WHERE code = '".$value."'";
 $result = mysqli_query($conn, $quer) or die('Please try again.');
 if (mysqli_num_rows($result) > 0) {
      echo '<p style = "color:green;"> A code has been found </p>';
      $row = $result->fetch_assoc();
      if(($row["used"])=='false'){ //if not used
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
            console.log("Check successful");
            append();
          }
        });
        </script>';

         $sql = "UPDATE Codes SET used = 'TRUE' WHERE code = '$value'";
         $result = mysqli_query($conn, $sql) or die('Please try again');
      }else{//if used
      echo '<p style = "color:red;"> ERROR: Code already used </p>';
      }
   }else{
     echo '<p style = "color:red;"> ERROR: Code does not exist </p>';
   }
   mysqli_close($conn);
 ?>
