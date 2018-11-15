<?php
session_start();
$rarity = $_SESSION["rarity"];
$animal = $_SESSION["animal"];
echo "You got a " . $rarity . " " . $animal . "!";
$animal = preg_replace('/\s+/', '', $animal);
$url = strtolower($animal) . ".png";
if($rarity === "rare"){
echo "<br><img style = 'background-color: rgb(68, 181, 200);
border-radius: 15px;
border-color: rgb(38, 152, 171);
border-width: 10px;
border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
}
if($rarity === "common"){
  echo "<br><img style = 'background-color: rgb(193, 200, 161);
  border-radius: 15px;
  border-color: rgb(171, 185, 110);
  border-width: 10px;
  border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
}
if($rarity === "epic"){
  echo "<br><img style = 'background-color: rgb(211, 146, 224);
  border-radius: 15px;
  border-color: rgb(191, 60, 217);
  border-width: 10px;
  border-style: solid' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
}
if($rarity === "legendary"){
  echo "<br><img style = 'background-color: rgb(215, 189, 74);
  border-radius: 15px;
  border-color: rgb(198, 164, 18);
  border-width: 10px;
  border-style: solid;' src = './img/ikomos/$url' alt = 'Sorry! iKOMO images coming soon!'>";
}
  ?>
