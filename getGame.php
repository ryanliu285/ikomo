<?php
session_start();
$game = $_SESSION['game'];
if($game = 'tennis'){
echo 'window.location.href = "./game/pong.html";';
}else if($game = 'heights'){
echo 'window.location.href = "./iKOMOheights/index.php";';
}
 ?>
