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
