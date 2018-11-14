<?php
require 'header.php';
require 'dbh.inc.php';
session_start();
$id = $_SESSION['userID'];
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
    h2 {
      font-family: "Dimbo";
      font-size: 50px;
    }
    .commontxt {
      color: rgb(193, 200, 161);
    }

    .raretxt {
      color: rgb(61, 79, 186);
    }
    .epictxt {
      color: rgb(211, 146, 224);
    }
    .legendarytxt {
      color: rgb(215, 189, 74);
    }
    .commonimg {
      background-color: rgb(193, 200, 161);
      border-radius: 15px;
      border-color: rgb(171, 185, 110);
      border-width: 10px;
      border-style: solid;
    }
    .rareimg {
      background-color: rgb(68, 181, 200);
      border-radius: 15px;
      border-color: rgb(38, 152, 171);
      border-width: 10px;
      border-style: solid;
    }
    .epicimg {
      background-color: rgb(211, 146, 224);
      border-radius: 15px;
      border-color: rgb(191, 60, 217);
      border-width: 10px;
      border-style: solid;
    }
    .legendaryimg {
      background-color: rgb(215, 189, 74);
      border-radius: 15px;
      border-color: rgb(198, 164, 18);
      border-width: 10px;
      border-style: solid;
    }
    #footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 75px;
      background-color: rgba(0, 0, 0, 0.5);
    }
    #closedisclaimer{
      color: white;
    }
    #closedisclaimer:hover{
      cursor: pointer;
    }
    #disclaimtxt{
      color: white;
    }
    #noowned {
      color: rgb(210, 42, 25);
      font-size: 30px;
    }
    .buttonx {
      background-color: rgba(106, 196, 206, 0.92);
      font-size: 18px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color: rgba(89, 154, 165, 0.92);
      border-bottom-width: 2px;
      border-bottom-style: solid;
      padding: 3px;
    }
    body {

    }
    </style>
  </head>
  <body>
    <center><h2>Your iKOMO Collection</h2></center>
    <br>
    <div class = "container-fluid">
      <div class = "row">
        <?php
        $qr = "SELECT * FROM owners WHERE uid = $id";
        $result = mysqli_query($conn, $qr) or die('Please sign in!');
        if (mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)){
            /* COMMON iKOMOs*/
            if($row["Animal"] == "Mouse"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/mouse.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Mouse | Domestic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Bunny"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/bunny.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Bunny | Domestic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Lizard"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/lizard.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Lizard | Domestic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Blue Snail"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/snail.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Blue Snail | Domestic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Shrimp"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/shrimp.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Shrimp | Aquatic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Squid"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/squid.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Squid | Aquatic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Sea Urchin"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/seaurchin.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Sea Urchin | Aquatic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Jellyfish"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/jellyfish.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Jellyfish | Aquatic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Frog"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/frog.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Frog | Wild</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Duck"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/duck.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Duck | Wild</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Deer"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/deer.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Deer | Wild</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Pigeon"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/pigeon.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Pigeon | Wild</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Slime"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/slime.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Slime | Mythic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Goldfish"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/goldfish.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Goldfish | Aquatic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Turkey"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/turkey.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Turkey | Domestic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            if($row["Animal"] == "Jackalope"){
              echo '<div class = "col-md-4"><center><img class = "commonimg" height = "300px" width = "auto" src = "./img/ikomos/jackalope.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Jackalope | Mythic</p></center><center><p class = "commontxt">Common</p></center><br><br></div>';
            }
            /* RARE iKOMOs*/
            if($row["Animal"] == "Snake"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/snake.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Snake | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Ferret"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/ferret.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Ferret | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Parrot"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/parrot.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Parrot | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Cow"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/cow.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Cow | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Sheep"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/sheep.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Sheep | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Pig"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/pig.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Pig | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Calico Cat"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/calcat.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Calico Cat | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Chick"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/chick.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Chick | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Crab"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/crab.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Crab | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Turtle"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/turtle.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Turtle | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Manta Ray"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/mantaray.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Manta Ray | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Sea Horse"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/seahorse.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Sea Horse | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Otter"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/otter.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Otter | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Starfish"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/starfish.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Starfish | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Clownfish"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/clownfish.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Clownfish | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Phytoplankton"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/phytoplankton.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Phytoplankton | Aquatic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Brown Bear"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/brownbear.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Brown Bear | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Porcupine"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/porcupine.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Porcupine | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Skunk"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/skunk.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Skunk | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Fox"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/fox.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Fox | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Elephant"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/elephant.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Elephant | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Bull"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/bull.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Bull | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Monkey"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/monkey.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Monkey | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Moose"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/moose.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Moose | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Zebra"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/zebra.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Zebra | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Wolf"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/wolf.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Wolf | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Munchkin Cat"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/muncat.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Munchkin Cat | Domestic</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            if($row["Animal"] == "Flying Squirrel"){
              echo '<div class = "col-md-4"><center><img class = "rareimg" height = "300px" width = "auto" src = "./img/ikomos/flysquirrel.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Flying Squirrel | Wild</p></center><center><p class = "raretxt">Rare</p></center><br><br></div>';
            }
            /* EPIC iKOMOs*/
            if($row["Animal"] == "Husky"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/husky.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Husky | Domestic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Llama"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/llama.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Llama | Domestic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Pomski"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/pomski.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Pomski | Domestic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Great White Shark"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/shark.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Great White Shark | Aquatic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Octopus"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/octopus.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Octopus | Aquatic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Penguin"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/penguin.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Penguin | Aquatic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Lion"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/lion.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Lion | Wild</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Tiger"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/tiger.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Tiger | Wild</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Giraffe"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/giraffe.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Giraffe | Wild</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Koala"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/koala.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Koala | Wild</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Phoenix"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/phoenix.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Phoenix | Mythic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            if($row["Animal"] == "Unicorn"){
              echo '<div class = "col-md-4"><center><img class = "epicimg" height = "300px" width = "auto" src = "./img/ikomos/unicorn.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Unicorn | Mythic</p></center><center><p class = "epictxt">Epic</p></center><br><br></div>';
            }
            /* Legendary iKOMOs*/
            if($row["Animal"] == "Shiba Inu"){
              echo '<div class = "col-md-4"><center><img class = "legendaryimg" height = "300px" width = "auto" src = "./img/ikomos/shiba.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Shiba Inu | Domestic</p></center><center><p class = "legendarytxt">Legendary</p></center><br><br></div>';
            }
            if($row["Animal"] == "Orca"){
              echo '<div class = "col-md-4"><center><img class = "legendaryimg" height = "300px" width = "auto" src = "./img/ikomos/orca.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Orca | Aquatic</p></center><center><p class = "legendarytxt">Legendary</p></center><br><br></div>';
            }
            if($row["Animal"] == "Panda"){
              echo '<div class = "col-md-4"><center><img class = "legendaryimg" height = "300px" width = "auto" src = "./img/ikomos/panda.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Panda | Wild</p></center><center><p class = "legendarytxt">Legendary</p></center><br><br></div>';
            }
            if($row["Animal"] == "Dragon"){
              echo '<div class = "col-md-4"><center><img class = "legendaryimg" height = "300px" width = "auto" src = "./img/ikomos/dragon.png" alt = "Sorry, iKOMO coming soon!"></center><center><br><p>Dragon | Mythic</p></center><center><p class = "legendarytxt">Legendary</p></center><br><br></div>';
            }

          }
        }
        else {
          echo '<div class = "col-md-12">
            <br><br><center><p id = "noowned">No owned iKOMOS!</p><br><br><a href = "mainInterface.php" class = "buttonx">Click here to buy some!</a></center></div>';
        }
        mysqli_close($conn);
         ?>
      </div>
    </div>
    <div id = "footer">
      <div class = "container-fluid">
        <div class = "row">
          <div class = "col-md-1">
            <p id = "closedisclaimer">X</p>
          </div>
          <div class = "col-md-1">

          </div>
          <div class = col-md-8>
            <br>
            <center><p id = "disclaimtxt">Disclaimer: This Virtual Enterprise online store is for educational purposes only (2018-2019 iKOMO).</p></center>
          </div>
          <div class = "col-md-2">

          </div>
        </div>
      </div>
    </div>
    <script>
    var fol = document.getElementById('footer');

    $("#closedisclaimer").click(function(){
      $("#footer").addClass('animated bounceOutDown');
      setTimeout(function(){
        fol.style.display = "none";
      }, 2000);
    });
    </script>
  </body>
</html>
