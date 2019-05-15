<?php

$servername = "db5000072625.hosting-data.io";
$dBUsername = "dbu230478";
$dBPassword = "SPdidsway1st";
$dbName = "dbs67209";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
/* <!DOCTYPE html>
<html>
<head>

</head>

<body>
  <form action = "?action=submitfunc" method = "post">
    <input type = "number" name = "repeat">
  </form>
</body>

</html> */

    $used = "no";
    $eggs = "fifty";
    $randomString = '';
    function generateString(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      for ($i = 0; $i < 5; $i++){
        $randomString .= $characters[rand(0, $charactersLength -1)];
      }
      return $randomString;
    }
    generateString();
    $stringrand = generateString();
    $sqlquery = "INSERT INTO Codes "."(code, used, eggs) "."VALUES "."(?, ?, ?)";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sqlquery)){
      header("Location: ../mainInterface.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($statement, "sss", $stringrand, $used, $eggs);
      mysqli_stmt_execute($statement);
      exit();
    }
