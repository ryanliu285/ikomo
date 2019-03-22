<?php
require 'header.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    .overlay{
    opacity:1;
    background-color:#ccc;
    position: fixed;
    width: auto;
    top:5%;
    right: 10%;
    bottom: 5%;
    left:10%;
    z-index:1000;
}
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
      /*background-color: rgba(106, 196, 206, 0.92); */
      font-size: 25px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color: rgba(89, 154, 165, 0.92);
      border-bottom-width: 2px;
      border-bottom-style: solid;
      padding: 3px;
    }
    #price{
      background-image: url('./img/price.png');
      background-repeat: none;
      width: 75px;
      background-size:75px;
    }
    #arcadebg {
      background-image: url('./img/arcadechoose-min.png');
      background-position: 0px 125px;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #iKOMOlifebt {
        float: right;
        margin-top: 78%;
        margin-right: 4%;
        background-color: #F7E188;
        opacity: 0.92;
    }
    #heightsbt {
        margin-top: 78%;
        margin-left: 4%;
        float: left;
        background-color: #C3F2FF;
        opacity: 0.92;
    }

    #tennisbt {
        margin-top: 78%;
        background-color: #4F8735;
        opacity: 0.92;
    }
    #makehover2 {
        color: #F4E194;
    }
    #makehover2:hover {
        color: rgb(196, 181, 119);
    }
    #makehover1 {
        color: #6E9D54;
    }
    #makehover1:hover {
        color: rgb(94, 134, 72);
    }
    #makehover3 {
        color: #E68686;
    }
    #makehover3:hover {
        color: rgb(167, 101, 101);
    }
    #imgintrooverlay{
      height: 500px;
      margin-top: 2%;
      width: auto;
    }
    #introoverlay {
      display: block;
    }
    #buttonoverlay {
      display: none;
    }

    /* #search {TODO: search icon
    background-image: url('./img/search.png');
    background-repeat: no-repeat;
    text-indent: 20px;
}
#search:active { background-image: none; text-indent: 0px;} */
    </style>
  </head>
<body id = "arcadebg">
  <div id = mainWelcomeText>
  </div>
  <div id = "introoverlay" class = "container-fluid">
    <div class = "row">
      <div class = "col-md-1">

      </div>

      <div class = "col-md-10">
        <center><img class = "animated fadeInDown" id = "imgintrooverlay" src = "./img/how2arcade.png"/></center>
      </div>

      <div class = "col-md-1">

      </div>
    </div>
  </div>
  <div id = "buttonoverlay" class = "container-fluid">
    <div class = "row">
      <div class = "col-md-4">
        <button id = "iKOMOlifebt" class = "buttonx" onclick="alert('Sorry, iKOMO Life coming soon! For now, please enjoy iKOMO tennis and iKOMO Heights.')"><a id = "makehover1" href = "#" onclick = "return false;">Enter..</a></button>
      </div>
      <div class = "col-md-4">
        <center>
          <button id = "tennisbt" class = "buttonx" onclick="logGame('tennis','game','./choosecharacter.php')"><a id = "makehover2" href = "#" onclick = "return false;">Enter..</a></button></center>
      </div>
      <div class = "col-md-4">
        <button id = "heightsbt" class = "buttonx" onclick="logGame('heights','game','./choosecharacter.php')"><a id = "makehover3" href = "#" onclick = "return false;">Enter..</a></button>
      </div>
  </div>
</div>
<script>
  var aol = document.getElementById('introoverlay');
  var bol = document.getElementById('buttonoverlay');
  $("#arcadebg").click(function(){
    $("#imgintrooverlay").removeClass('animated fadeInDown');
    $("#imgintrooverlay").addClass('animated fadeOutUp');
    setTimeout(function(){
      aol.style.display = "none";

    }, 1000);
    setTimeout(function(){
      $("#buttonoverlay").addClass('animated bounceInUp');
      bol.style.display = "block";
    }, 1000);
  });
</script>
  <script>
  function logGame(value,name,redir){
  $.ajax({
    type: "POST",
    url: "./sessionThis.php",
    data: {'data': value, 'name': name,'redir':redir},
    success: function(msg) {
      x = msg;
      console.log("Check ended");
      $('#mainWelcomeText').append(x);
    }
  });
  }
  </script>
</html>
