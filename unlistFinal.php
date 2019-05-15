<?php
session_start();
 $sid = $_POST['data'];
 $price = $_POST['price'];
 $servername = "db5000072625.hosting-data.io";
 $dBUsername = "dbu230478";
 $dBPassword = "SPdidsway1st";
 $dbName = "dbs67209";
 $animal;
 $rarity;
 $type;
 $UID;
 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

 if(!$conn){
   die("Connection failed: ".mysqli_connect_error());
 }

$sql = "DELETE FROM marketplace WHERE StringID = \"".$sid."\"";
$result = $conn->query($sql);

echo '<script>if(alert("Unlisting Successful!")){ window.location.reload();}
else  {window.location.reload();} </script>';
?>
