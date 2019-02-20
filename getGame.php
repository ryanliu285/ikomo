<?php
session_start();
$game = $_SESSION['game'];
if($game == 'tennis'){
echo '<script type="text/javascript">window.location.href = "./game/pong.html?='.$game.'";</script>';
}else if($game == 'heights'){
echo '<script type="text/javascript">window.location.href = "./iKOMOheights/index.php";</script>';
}
 ?>
