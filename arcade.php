<?php
require 'header.php';
require './includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
    .arcade {
      background-image: url("./img/arcade.gif");
      background-size: cover;
    }
    #arcadeoverlay{
      margin-top: 20px;
      height: 500px;
      width: 500px;
      background-color: rgba(255, 255, 255, 0.98);
    }
    h2 {
      font-family: "Dimbo";
      font-size: 50px;
      color: #EBCB5A;
    }
    h1 {
      font-family: "Dimbo";
      font-size: 75px;
      color: #59AEC7;
    }
    #counter {
      color: #59AEC7;
      margin-top: 5%;
      font-size: 75px;
    }
    #count {
      margin-top: 2%;
      color: #EBCB5A;
      font-size: 75px;
    }
    </style>
  </head>
<body class = "arcade">

  <div class = "container-fluid">
        <div class = "row">
          <div class = "col-md-3">

          </div>

          <div id = "arcadeoverlay" class = "col-md-6">
              <center>
              <h1>iKOMO Arcade coming soon</h1>
              <h2>Once 1000 iKOMOs are in circulation, the arcade will unlock.</h2>
              <p id = "counter"><?php
              $quer = "SELECT * FROM owners";
              $res = mysqli_query($conn, $quer) or die('Please return to home and sign in!');
              $row_cnt = $res -> num_rows;
                echo "Current Total: ";
              ?></p>
              <p id = "count"><?php echo $row_cnt;?></p>

            </center>
          </div>

          <div class = "col-md-3">

          </div>
        </div>
    </div>
</body>
</html>
