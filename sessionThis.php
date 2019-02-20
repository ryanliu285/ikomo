<?php
session_start();
$data = $_POST['data'];
$name = $_POST['name'];
$redir = $_POST['redir'];
$_SESSION['game'] = $data;
echo '<script>
window.location.href = "./choosecharacter.php?="+\''.$data.'\';</script>'
 ?>
