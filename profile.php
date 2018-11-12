<?php
require 'header.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    /* ????? */
    $query = 'SELECT "Animal" FROM "owners" WHERE ""$_SESSION["userID"]""';
     ?>
  </body>
</html>
