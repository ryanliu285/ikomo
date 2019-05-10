<?php
    session_start();
    if(isset($_SESSION['userID'])){
    $id = $_SESSION["userID"];
    $dbhost = 'db5000072625.hosting-data.io';
    $dbuser = 'dbu230478';
    $dbpass = 'SPdidsway1st';
    $dbname = 'dbs67209';
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
    $cookie_name = "loaded";
    $cookie_value = "hasloaded";
    setcookie($cookie_name, $cookie_value, time() + (3600), "/", '.vei-ikomo.com', isset($_SERVER["HTTPS"]), true);
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <meta name = "description" content = "Welcome to iKOMO! iKOMO promotes financial literacy by leveraging the power of fun. Through the fusion of blockchain technology and an imaginative outlet,
    iKOMO allows users to collect, trade, and interact with digital pets."/>
  <meta name = "viewport" content = "width=device-width, initial-scale=1"/>
  <meta name = "author" content = "Created by Brandon Lee and Ryan Liu for South Pasadena High School."/>
  <link rel = "stylesheet" type = "text/css" href = "../main.css">
  <link rel = "stylesheet" type = "text/css" href = "../animate.css"/>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <title>VEI iKOMO</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="../img/favicon.png" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132043841-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132043841-1');
  </script>
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
  #usernameanim{
    bottom: 0;
    left: 0;
  }
  #shopanim {
    bottom: 0;
    left: 0;
  }
  </style>
</head>

<body>
  <div id = "hoverlay">
  </div>
  <header class = "headbg">
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-2">
          <a href = "#">
            <img id = "headimg" src = "../img/ikologo.png" alt = "logo" width = "150px" height= "auto" onClick = "window.location.href = '../index.php'">
          </a>
        </div>
      <div class = "col-md-3">
        <div class = "row navdiv">
          <div class = "col-md-3">
          <a class = "nav" href = "../index.php">Home</a>
        </div>
        <div class = "col-md-3">
        <a class = "nav" href = "../mainInterface.php">Store</a>
      </div>
      <div class = "col-md-3">
      <a class = "nav" href = "../about.php">About</a>
    </div>
    <div class = "col-md-3">
    <a class = "nav" href = "../contact.php">Contact</a>
  </div>
  </div>
      </div>
      <div class = "col-md-1">

      </div>
      <div class = "col-md-2">
        <?php
          if(isset($_SESSION['userID'])){
            $hello = "Hello ";
            $claim = "!";
            echo '<br><p id = "usernameanim" class = "username">'.$hello.$_SESSION["userUID"].$claim;'</p>';

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
          echo '<br><p id = "shopanim" class = "username">'.$amt.$_SESSION["userAMT"].$coin.$paran.$dollar.$paran2;'</p>';
        }
        else {

        }

      ?>
    </div>
      <div class = "col-md-1">
        <?php
          if(isset($_SESSION['userID'])){
          echo '<br><form class = "navl" action = "includes/logout.inc.php" method = "post"><button class = "buttonx" type = "submit" name = "logout-submit">Logout</button></form>';
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
<!DOCTYPE html>
<html>
  <head>
    <style>
    .arcade {
      background-image: url("../img/arcade.gif");
      background-size: cover;
    }
    #arcadeoverlay{
      margin-top: 20px;
      height: auto;
      width: 500px;
      background-color: rgba(255, 255, 255, 0.98);
    }
    h2 {
      font-family: "Dimbo";
      font-size: 30px;
      color: #EBCB5A;
    }
    h1 {
      margin-top: 20px;
      font-family: "Dimbo";
      font-size: 50px;
      color: #59AEC7;
    }
    #counter {
      color: #59AEC7;
      margin-top: 5%;
      font-size: 50px;
    }
    #count {
      margin-top: 2%;
      color: #EBCB5A;
      font-size: 50px;
    }
    </style>
  </head>
<body class = "arcade">

  <div class = "container-fluid">
        <div class = "row">
          <div class = "col-md-3">

          </div>

          <div id = "arcadeoverlay" class = "col-md-6">

          </div>

          <div class = "col-md-3">

          </div>
        </div>
    </div>
</body>
</html>

<?php
$dayofweek = date('w', strtotime(date("Y-m-d H:i:s")));
$id = $_SESSION["userID"];
$servername = "db5000072625.hosting-data.io";
$dBUsername = "dbu230478";
$dBPassword = "SPdidsway1st";
$dbName = "dbs67209";
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dbName);

$score1 = 0;
$score2 = 0;
$score3 = 0;
$score4 = 0;
$x=1;
$score5 = 0;
$scoreName1 = 'NONE';
$scoreName2 = 'NONE';
$scoreName3 = 'NONE';
$scoreName4 = 'NONE';
$scoreName5 = 'NONE';
$uid = $_SESSION["userUID"];

$sql = 'SELECT * FROM date';
$result = $conn -> query($sql)->fetch_object()->date;
$sql = 'SELECT NOW()+1';
$res =  $conn -> query($sql);
while($now =$res->fetch_assoc()){
  if($result+240000 < $now["NOW()+1"]){//240000
    echo '<script>console.log("'.$now["NOW()+1"].'")</script>';
    $sql = 'UPDATE date SET date= '.$now["NOW()+1"].'';
    $result = $conn -> query($sql);
    $sql = 'UPDATE iKOMODB SET played = 0';
    $result = $conn -> query($sql);

}}

$sql = 'SELECT * FROM TennisScore ORDER BY score DESC LIMIT 5';

$result = $conn -> query($sql);

if ($result->num_rows >= 0) {

  // output data of each row and check stringID
  while($row = $result-> fetch_assoc()){
    if($x == 1){
      $score1 = $row["score"];
      $scoreName1 = $row["user"];
      $x=2;
    }else if ($x == 2){
      $score2 = $row["score"];
      $scoreName2 = $row["user"];
      $x=3;
    }else if ($x == 3){
      $score3 = $row["score"];
      $scoreName3 = $row["user"];
      $x=4;
    }else if ($x == 4){
      $score4 = $row["score"];
      $scoreName4 = $row["user"];
      $x = 5;
    }else{
      $score5 = $row["score"];
      $scoreName5 = $row["user"];
    }
  }

$sql = 'SELECT played FROM iKOMODB WHERE uidUsers = "'.$uid.'"';
$result = $conn -> query($sql);
$result = $result -> fetch_object()->played;
  if($result==0){
  $played = FALSE;
  $earnings = $_SESSION['scoreTennis']/10*25;
  if($earnings < 25){
    $played = TRUE;
  }else{
    $sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$id.'';
    $coins = 0;
    if(!(mysqli_query($conn, $sql))){
      echo "Failed, please send a screenshot of this error to ikomo.vei@gmail.com";
    }
    $result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
    $coins = $result+=$earnings;
    $sql = 'UPDATE iKOMODB SET KOMOcoins = '.$coins.' WHERE idUsers = '.$id.'';
    $result = mysqli_query($conn,$sql);
    $sql = 'UPDATE iKOMODB SET played = 1 WHERE idUsers = '.$id.'';
    $result = $conn -> query($sql);
  }
}else{
  $played = TRUE;
}

mysqli_close($conn);

echo '<div id = "scoreBoard">
<center><h1>1st&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$scoreName1.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$score1.' points</h1></center>
<center><h1>2nd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$scoreName2.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$score2.' points</h1></center>
<center><h1>3rd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$scoreName3.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$score3.' points</h1></center>
<center><h1>4th&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$scoreName4.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$score4.' points</h1></center>
<center><h1>5th&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$scoreName5.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$score5.' points</h1></center>
<center><h1 id = "daily">YOU EARNED YOUR DAILY '.$earnings.' KOMOCOINS FOR ACHIEVING '.$_SESSION['scoreTennis'].' points</h1></center>
</div>
<script>var overlay = document.getElementById(\'arcadeoverlay\');
overlay.appendChild(document.getElementById(\'scoreBoard\'));</script>';
if($played){
  echo "<script>$('#daily').remove();</script>";
}
}
?>
