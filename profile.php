<?php
require 'header.php';
require 'dbh.inc.php';
session_start();
$id = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
    h2 {
      font-family: "Dimbo";
      font-size: 50px;
    }
    </style>
  </head>
  <body>
    <center><h2>Your iKOMOs</h2></center>
    <div class = "container-fluid">
      <div class = "row">
        <?php
        $qr = "SELECT * FROM owners WHERE uid = $id";
        $result = mysqli_query($conn, $qr) or die('Could not connect: '.mysqli_error());
        if (mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)){
            if($row["Animal"] == "Lion"){
              echo '<div class = "col-md-4"><center><img height = "300px" width = "auto" src = "./img/ikomos/lion.png"></center><br><center><p>Lion</p></center><br><center><p>Epic<p></center></div>';
            }
            if($row["Animal"] == "Great White Shark"){
              echo '<div class = "col-md-4"><center><img height = "300px" width = "auto" src = "./img/ikomos/shark.png"></center><br><center><p>Great White Shark</p></center><br><center><p>Legendary<p></center></div>';
            }
            if($row["Animal"] == "Wolf"){
              echo '<div class = "col-md-4"><center><img height = "300px" width = "auto" src = "./img/ikomos/fox.png"></center><br><center><p>Wolf</p></center><br><center><p>Rare<p></center></div>';
            }
          }
        }
        else {
          echo "<p>No owned iKOMOS!</p>";
        }
        mysqli_close($conn);
         ?>
      </div>
    </div>

  </body>
</html>
