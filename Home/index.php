<?php
  require "header.php";
 ?>
 <main>
   <?php
      if(isset($_SESSION['userID'])){
        echo '<p>You are logged in!</p>';
      }
      else {
        echo '
        <link rel ="stylesheet" type = "text/css" href = "main.css">
        <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        </head>
        <div class = "container-fluid">
          <div class = "row">
            <div> class = "col-md-1">
            </div>
            <div class = "col-md-10">
              <div class = "bg">
              </div>
            <div class = "col-md-1">
            </div>
            </div>
          </div>
        </div>';
      }
    ?>
 </main>

 <?php
  require "footer.php";
  ?>
