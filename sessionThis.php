<?php
session_start();
$data = $_POST['data'];
$name = $_POST['name'];
$redir = $_POST['redir'];
$SESSION[$name] = $data;
 ?>
