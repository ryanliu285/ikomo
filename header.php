<?php
    session_start();
    if(isset($_SESSION['userID'])){
    $id = $_SESSION["userID"];
    $dbhost = 'db759106289.hosting-data.io';
    $dbuser = 'dbo759106289';
    $dbpass = 'SPdidsway1st';
    $dbname = 'db759106289';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(! $conn ) {
       die('Could not connect: ' . mysql_error());
    }
    $sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$id.'';
    if(!(mysqli_query($conn, $sql))){
      echo "failed";
    }
    $result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
    $_SESSION['userAMT'] = $result;
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <meta name = "description" content = "Welcome to iKOMO! iKOMO promotes financial literacy by leveraging the power of fun. Through the fusion of blockchain technology and an imaginative outlet,
    iKOMO allows users to collect, trade, and interact with digital pets."/>
  <meta name = "viewport" content = "width=device-width, intial-scale=1"/>
  <link rel = "stylesheet" type = "text/css" href = "main.css">
  <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <title>VEI iKOMO</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <style>
  #hoverlay {
    width: 100%;
    height: 200%;
    background-color: #F9F4D2;
    position: fixed;
    display: none;
    z-index: 100;
  }
  #headimg{
    margin-left: 5%;
    margin-top: 5%;
  }
  .buttonx{
    background-color: rgba(106, 196, 206, 0.92);
    font-size: 18px;
    font-family: "Dimbo";
    text-decoration: none;
    text-align: center;
    border: none;
    border-bottom-color: rgba(89, 154, 165, 0.92);
    border-bottom-width: 2px;
    border-bottom-style: solid;
  }
  .username {
    margin-top: 20px;
    font-size: 20px;
    font-family: "Dimbo";
  }
  </style>
</head>

<body>
  <div id = "hoverlay">
  </div>
  <header>
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-2">
          <a href = "#">
            <img id = "headimg" src = "./img/ikologo.png" alt = "logo" width = "150px" height= "auto" onClick = "window.location.href = 'index.php'">
          </a>
        </div>
      <div class = "col-md-3">
        <div class = "row navdiv">
          <div class = "col-md-3">
          <a class = "nav" href = "marketplace.php">Marketplace</a>
        </div>
        <div class = "col-md-3">
        <a class = "nav" href = "profile.php">Profile</a>
      </div>
      <div class = "col-md-3">
      <a class = "nav" href = "#">About</a>
    </div>
    <div class = "col-md-3">
    <a class = "nav" href = "#">Contact Us</a>
  </div>
  </div>
      </div>
      <div class = "col-md-1">

      </div>
      <div class = "col-md-2">
        <?php
          if(isset($_SESSION['userID'])){
            $hello = "Hello ";
            $ex = "!";
            echo '<p id = "usernameanim" class = "username">'.$hello.$_SESSION["userUID"].$ex;'</p>';

          } else {

          }
        ?>
      </div>
      <div class = "col-md-3">
        <?php
        if(isset($_SESSION['userID'])){
          $amt = "Balance: ";
          $coin = " KOMOcoins";
          $dollar = ($_SESSION["userAMT"] / 100) * 25;
          $paran = " ($";
          $paran2 = ")";
          echo '<p id = "shopanim" class = "username">'.$amt.$_SESSION["userAMT"].$coin.$paran.$dollar.$paran2;'</p>';
        }
        else {

        }
      ?>
      </div>
      <div class = "col-md-1">
        <?php
          if(isset($_SESSION['userID'])){
          echo '<form class = "navl" action = "includes/logout.inc.php" method = "post"><button class = "buttonx" type = "submit" name = "logout-submit">Logout</button></form>';
        }
        else {

        }
        ?>
      </div>
    </div>
  </div>
  </header>
</body>
</html>
