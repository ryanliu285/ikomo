<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8">
  <meta name = "description" content = "Welcome to iKOMO! iKOMO promotes financial literacy by leveraging the power of fun. Through the fusion of blockchain technology and an imaginative outlet,
    iKOMO allows users to collect, trade, and interact with digital pets."/>
  <meta name = "viewport" content = "width=device-width, intial-scale=1"/>
  <link rel = "stylesheet" type = "text/css" href = "main.css">
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <title>VEI iKOMO</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>

<body>
  <header>
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-2">
          <a href = "#">
            <img src = "img/ikologo.png" alt = "logo" width = "150px" height= "auto">
          </a>
        </div>
      <div class = "col-md-3">
        <div class = "row navdiv">
          <div class = "col-md-3">
          <a class = "nav" href = "#">Marketplace</a>
        </div>
        <div class = "col-md-3">
        <a class = "nav" href = "#">Portfolio</a>
      </div>
      <div class = "col-md-3">
      <a class = "abt" href = "#">About</a>
    </div>
    <div class = "col-md-3">
    <a class = "nav" href = "#">Contact Us</a>
  </div>
  </div>
      </div>
      <div class = "col-md-5">
        <?php
          if(isset($_SESSION ['userID'])){
            echo '<form class = "navl" action = "includes/logout.inc.php" method = "post"><button type = "submit" name = "logout-submit">Logout</button></form>';
          }
          else {
            echo '<form class = "navform" action = "includes/login.inc.php" method = "post"><input type = "text" name = "mailuid" placeholder = "Username..."><input type = "password" name = "pwd" placeholder = "Password..."><button type = "submit" name = "login-submit">Login</button></form>';
            echo '<a style= "" class = "xD" href = "signup.php">Signup!</a>';
          }
        ?>
      </div>
    </div>
</div>
  </header>

</body>

</html>
