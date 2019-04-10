<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "../main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../animate.css"/>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <style>
    #disclaimtxt{
      color: white;
    }
      .signup {
        text-align: center;
      }
      #overlay {
        width: 100%;
        height: 200%;
        background-color: #F9F4D2;
        position: fixed;
        z-index: 101;
      }
      .percent-count {
        width: 450px;
        height: 50px;
        margin: 10px auto;
        font-size: 40px;
        text-align: center;
        color: #71DDE2;
      }
      .progress-bar {
        width: 506px;
        height: 26px;
        background-color: #71DDE2;
        border-radius: 13px;
        margin: 10px auto;
      }
      .progress {
        width: 25px;
        height: 20px;
        border-radius: 10px;
        background-color: #34ABB7;
      }
      #loading {
        height: 200px;
        width: 100%;
      }
      #loadimage {
        display: block;
        margin: 10px auto;
      }
      #accountoverlay {
        margin: auto;
        width: 50%;
        height: 500px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: block;
        border-radius: 15px;
        border: solid;
        border-width: 10px;
        border-color: rgba(136, 211, 229, 0.92);

      }
      #login {
        float: left;
        width: 100px;
      }
      .buttonx{
        background-color: rgba(106, 196, 206, 0.92);
        font-size: 18px;
        font-family: "Dimbo";
        text-decoration: none;
        text-align: center;
        border: none;
        border-bottom-color: rgba(89, 154, 165, 0.92);
        border-bottom-width: 3px;
        border-bottom-style: solid;
      }
      .buttonx:hover {
        cursor: pointer;
      }
      .inputx {
        background-color: rgba(0,0,0,0);
        border: none;
        border-bottom-width: 4px;
        border-bottom-style: solid;
        border-bottom-color: rgba(89, 154, 165, 0.92);
        font-family: "Dimbo";
        width: 250px;
        font-size: 18px;
      }
      h2 {
        font-family: "Dimbo";
        font-size: 50px;
      }
      .learnmore {
        font-size: 25px;
      }
      #signupoverlay {
        margin: auto;
        width: 50%;
        height: 550px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: none;
        border-radius: 15px;
        border: solid;
        border-width: 10px;
        border-color: rgba(136, 211, 229, 0.92);
      }
      #learnmoreoverlay {
        margin: auto;
        width: 50%;
        height: 550px;
        z-index: 99;
        background-color: rgba(235, 255, 253, 0.97);
        display: none;
        border-radius: 15px;
        border: solid;
        border-width: 10px;
        border-color: rgba(136, 211, 229, 0.92);
      }
      .signuperror {
        color: rgb(210, 22, 25);
        font-family: "Dimbo";
        font-size: 16px;
      }
      .signupsucc {
        color: rgb(22, 152, 47);
        font-family: "Dimbo";
        font-size: 16px;
      }
      #aboutanim {
        padding: 3px;
      }
      #signupanim {
        padding: 3px;
      }

      #returnanim{
        padding: 4px;
      }
      #closedisclaimer{
        color: white;
      }
      #closedisclaimer:hover{
        cursor: pointer;
      }
      #{
        color: white;
        padding-top: 5px;
      }
      .signtxt{
        font-size: 14px;
      }
      #loggedin {
        display: none;
      }
      #shibwelcome{

      }
    @media only screen and (min-width: 992px) {
      #mkp{
        margin-top: 140%;
        float: right;
      }
      #arc{
        float: left;
        margin-top: 140%;
      }
      #hme {
        margin-top: 100%;
        float: left;
        position: relative;
        right: 45%;
      }
      #str{
        margin-top: 100%;
        float: right;
        position: relative;
        left: 39%;
        z-index: 99;
      }
      .bigbt{
        font-size: 24px;
        color: black;
        text-decoration: none;
        padding: 3px;
        padding-left: 5px;
        padding-right: 5px;
      }
}
    @media only screen and (min-width: 1537px) {
      #mkp{
        margin-top: 145%;
        float: right;
      }
      #arc{
        float: left;
        margin-top: 145%;
      }
      #hme {
        margin-top: 105%;
        float: left;
        position: relative;
        right: 45%;
      }
      #str{
        margin-top: 105%;
        float: right;
        position: relative;
        left: 39%;
        z-index: 99;
      }
      .bigbt{
        font-size: 34px;
        color: black;
        text-decoration: none;
        padding: 3px;
        padding-left: 5px;
        padding-right: 5px;
      }
    }
    .bg{
      background: url('../img/room.png') no-repeat center center fixed;
      background-size: cover;
    }
    #ikomo{
      height:40%;
      width:auto;
      position: fixed;
      bottom:0;
    }
    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <div class = "row">
      <div class = "col-sm-6">
        <video class = "vid" height = "auto" controls> <source src = "./iKOMO Crypto Video.mp4"> Your browser does not support HTML5 video.</video>
      </div>
      <div class = "col-sm-6">
        <video class = "vid" height = "auto" controls> <source src = "./financial literacy vid.mov"> Your browser does not support HTML5 video.</video>
      </div>
    </div>
    <center><a>Click here if you are done watching!</a></center>
    <img id = "ikomo" src = "../img/ikomos/duck.png">
    <script>
    var action = false;
    var movement;
    var behind = false;
    var oldMove=0;
    setInterval(function () {
      move();
    }, 6500);
    function move(){
      movement = Math.random();
      movement*=$(document).width();
      if(movement<oldMove){
        $("#ikomo").css("transform","scaleX(1)");
        behind = true;
      }else{
        $("#ikomo").css("transform","scaleX(-1)");
        behind = false;
      }
      var i = oldMove;
      oldMove = movement;
      var timer = setInterval(function () {
        if(movement<=i && !behind){
          clearInterval(timer);
        }else if (movement>i && behind){
          clearInterval(timer);
        }
        $("#ikomo").css("left",i+"px");
        if(behind){
          i-=15;
        }else{
          i+=15;
        }
      }, 25);

    }
    </script>
    <script>
      $(".titles").height($(window).width()/10);
      $(".image").height($(window).height()/1.2);
      $(".vid").width($(window).width()/2.3);
    </script>
  </body>


 </html>
