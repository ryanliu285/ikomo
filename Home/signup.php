<?php
  require "header.php";
 ?>

 <main>
   <div class = "container">
   <div class = "row">
     <div class = "col-md-3">
     </div>
     <div class = "col-md-6">
       <center><h1>Signup</h1></center>
       <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "emptyfields"){
                echo '<center><p class = "signuperror">Fill in all fields!</p></center>';
            }
            else if ($_GET["error"] == "invalidmailuid"){
              echo '<center><p class = "signuperror">Invalid Username and E-mail!</p></center>';
            }
            else if ($_GET["error"] == "invaliduid"){
              echo '<center><p class = "signuperror">Invalid Username!</p></center>';
            }
            else if ($_GET["error"] == "invalidmail"){
              echo '<center><p class = "signuperror">Invalid E-mail!</p></center>';
            }
            else if ($_GET["error"] == "passwordcheck"){
              echo '<center><p class = "signuperror">Your passwords do not match!</p></center>';
            }
            else if ($_GET["error"] == "usertaken"){
              echo '<center><p class = "signuperror">Username is already taken!!</p></center>';
            }
            else if ($_GET["signup" == "success"]){
              echo '<center><p class = "signupsucc">Signup Successful!</p></center>';
            }
          }
        ?>
       <form action = "includes/signup.inc.php" method = "post">
         <center><br><input type = "text" name = "uid" placeholder= "VEI Username"></br>
         <br><input type = "text" name = "mail" placeholder= "E-mail"></br>
         <br><input type = "password" name = "pwd" placeholder= "Password"></br>
         <br><input type = "password" name = "pwd-repeat" placeholder= "Repeat Password"></br>
         <br><button type = "submit" name = "signup-submit">Finish Sign Up!</button></br></center>
       </form>
     </div>
     <div class = "col-md-3">
     </div>
   </div>
   </div>


 </main>

 <?php
  require "footer.php";
  ?>
