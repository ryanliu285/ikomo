<?php
session_start();
$gameAnimal = $_POST['data'];
setcookie("ArcadeAnimal", $gameAnimal, time()+3600, "/", "", 1);
echo '<script type="text/javascript">console.log("'.$gameAnimal.'");</script>';
 ?>
