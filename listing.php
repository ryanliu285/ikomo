<?php
require 'header.php';
$_SESSION['change'] = 1;
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    #price{
      background-image: url('./img/price.png');
      background-repeat: none;
      width: 75px;
      background-size:75px;
    }
    /* #search {TODO: search icon
    background-image: url('./img/search.png');
    background-repeat: no-repeat;
    text-indent: 20px;
}
#search:active { background-image: none; text-indent: 0px;} */
    </style>
  </head>
<body class = "marketbg">
  <div id = mainWelcomeText>
    <h1>Marketplace</h1>
  </div>
  <div id = "searchsort" class ="row">
    <div class = "col-md-6" style = "text-align:center;">
        <input type="text" onkeyup = "inputChange(this.value)"id = "search" style = "border:0; background:none; border-bottom:2px solid grey; width: 90%;" placeholder="Search..">
    </div>
  </div>
  <!--TODO: Display stuff based on search bar-->
  <script>
  inputChange("");
  var x;
  function append(){
    $("#searchsort").append(x);
    for(i=0; i<=oldsession; i++){
      if($('#' + oldsession).remove()){
        console.log("removed");
      }
    }
  }
    function inputChange(value){
      console.log(value);
      $.ajax({
        type: "POST",
        url: "onChange.php",
        data: {'data': value},
        success: function(msg) {
          x = msg;
          console.log("Check ended");
          append();
        }
    });
    }
  </script>
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
</body>
<script>
var fol = document.getElementById('footer');

$("#closedisclaimer").click(function(){
  $("#footer").addClass('animated bounceOutDown');
  setTimeout(function(){
    fol.style.display = "none";
  }, 2000);
});
</script>
</html>
