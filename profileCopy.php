<?php
require 'header.php';
require './includes/dbh.inc.php';
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
    <script>
    var x;
    function append(){
      $("#appendTarget").append(x);
    }
      function inputChange(){
        var rarityChange = document.getElementById('rarityChange').value;
        console.log($(".ikomoAnimal"));
        $(".ikomoAnimal").remove();
        $.ajax({
          type: "POST",
          url: "./onChangeProfile.php",
          data: {'rarityChange': rarityChange},
          success: function(msg) {
            x = msg;
            console.log("Check ended");
            append();
          }
      });
      }
    </script>
    <div class = "container-fluid">
    <select id = "rarityChange" onchange = "inputChange()">
      <option value="all">All Rarities</option>
      <option value="common">Common</option>
      <option value="rare">Rare</option>
      <option value="epic">Epic</option>
      <option value="legendary">Legendary</option>
    </select>
      <div id = "appendTarget" class = "row">
      </div>
    </div>
    <script>
    inputChange();
    </script>
  </body>
</html>
