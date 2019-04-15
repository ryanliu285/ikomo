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
.myButton {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:5px;
	border:1px solid #18ab29;
	cursor:pointer;
	color:#ffffff;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}
.myButton2 {
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:5px;
	border:1px solid #18ab29;
	cursor:pointer;
	color:#ffffff;
	padding:8px 16px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton2:hover {
	background-color:#5cbf2a;
}
.myButton2:active {
	position:relative;
	top:1px;
}

    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <center><h1 id = "title" style = "font-size:200px;">Quiz!</h1></center>
    <center><h1 id = "blurb" style = "color:#55AFC9; text-shadow:2px 2px #EDCD4F">Finish this quiz to earn 100 KOMOcoins!</h1></center>
    <center><h1 id = "question" style = "color:#55AFC9; text-shadow:2px 2px #EDCD4F">Question</h1></center>
    <div id = "score">
      <center><h1 style = "color:#55AFC9; text-shadow:2px 2px #EDCD4F">You got a score of:</h1></center>
      <center><h1 id = "scoreText" style = "font-size:200px; color:#55AFC9; text-shadow:2px 2px #EDCD4F;"></h1></center>
      <center id = "failQuiz"><button class = "myButton2"onclick = "restartQuiz()"><h1 style = "font-size:40px;">Try again!</h1></button></center>
      <center id = "successQuiz"><button class = "myButton2"onclick = "successQuiz()"><h1 style = "font-size:40px;">Claim Points!</h1></button></center>
    </div>
    <br>
    <br>
    <br>
    <center id = "start"><button class = "myButton"onclick = "startQuiz()"><h1 style = "font-size:40px;">Start!</h1></button></center>
    <div class = "row" id = "answers">
      <div class = "col-sm-4">
        <button class = "myButton2"onclick = "answers('a')"><h1 style = "font-size:20px" id = "a">&nbsp;A: </h1></button>
        <br><br>
      </div>
      <div class = "col-sm-4">
        <button class = "myButton2"onclick = "answers('b')"><h1 style = "font-size:20px" id = "b">&nbsp;B: </h1></button>
        <br><br>
      </div>
      <div class = "col-sm-4">
        <button class = "myButton2"onclick = "answers('c')"><h1 style = "font-size:20px" id = "c">&nbsp;C: </h1></button>
        <br><br>
      </div>
    </div>
    <center id = "continue"><button class = "myButton"onclick = "revealNew()"><h1 style = "font-size:40px;">Continue</h1></button></center>
    <script>
      var movementTimer;
      var timer;
      var question = 1;
      var score = 5;
      var answer = "a";
      $("#answers").css("display","none");
      $("#question").css("display","none");
      $("#failQuiz").css("display","none");
      $("#successQuiz").css("display","none");
      $("#continue").css("display","none");
      $("#score").css("display","none");
      function startQuiz(){
      $("#start").css("display","none");
      var size = 200;
      var increment = 20;
      var interval = setInterval(function () {
          console.log(size);
          size=size-increment;
          increment/=1.15;
          if(size<=50){
            $("#title").css("font-size","50px");
            clearInterval(interval);
          }
          $("#title").css("font-size",size+"px");
        }, 50);
        revealNew();
      }
      function restartQuiz(){
        question = 1;
        score = 5;
        revealNew();
      }
      function suceessQuiz(){

      }
      function revealNew(){
        if(question == 1){
          document.getElementById("question").innerHTML = "Compound interest is...";
          document.getElementById("a").innerHTML = "...accumulated continuously";
          document.getElementById("b").innerHTML = "...not as powerful as simple interest";
          document.getElementById("c").innerHTML = "...not a real thing";
          $("#answers").css("display","block");
          $("#blurb").css("display","none");
          $("#question").css("display","block");
          answer = "a";
        }else if (question == 2){
          document.getElementById("question").innerHTML = "What is Cryptocurrency?";
          document.getElementById("a").innerHTML = "A game token";
          document.getElementById("b").innerHTML = "A digital medium of exchange";
          document.getElementById("c").innerHTML = "An iKOMO";
          $("#answers").css("display","block");
          $("#blurb").css("display","none");
          $("#question").css("display","block");
          answer = "b";
        }else if(question == 3){
          document.getElementById("question").innerHTML = "Stocks...";
          document.getElementById("a").innerHTML = "...are high risk";
          document.getElementById("b").innerHTML = "...are all expensive";
          document.getElementById("c").innerHTML = "...low reward";
          $("#answers").css("display","block");
          $("#blurb").css("display","none");
          $("#question").css("display","block");
          answer = "a";
        }else if (question == 4){
          document.getElementById("question").innerHTML = "Return is...";
          document.getElementById("a").innerHTML = "...loss";
          document.getElementById("b").innerHTML = "...benefit";
          document.getElementById("c").innerHTML = "...neither";
          $("#answers").css("display","block");
          $("#blurb").css("display","none");
          $("#question").css("display","block");
          answer = "b";
        }else if (question == 5){
          document.getElementById("question").innerHTML = "ROI is...";
          document.getElementById("a").innerHTML = "...return on interest";
          document.getElementById("b").innerHTML = "...investment";
          document.getElementById("c").innerHTML = "...return divided by investment";
          $("#answers").css("display","block");
          $("#blurb").css("display","none");
          $("#question").css("display","block");
          answer = "c";
        }else{
          $("#answers").css("display","none");
          $("#blurb").css("display","none");
          $("#question").css("display","none");
          $("#score").css("display","block");
          $("#continue").css("display","none");
          document.getElementById("scoreText").innerHTML = score+"/5";
          document.getElementById("scoreText").css.style = "font-size:200px; color:#55AFC9; text-shadow:2px 2px #EDCD4F;";
          if(score >=3){
            $("#successQuiz").css("display","block");
          }else{
            $("#failQuiz").css("display","block");
          }
        }
      }
      function answers(guess){
        if(answer == guess && question == 1){
          document.getElementById("question").innerHTML = "Correct! Compound interest is accumulated continuously. This means that the amount of given interest is increasing in regular intervals.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          jump();
        }else if (answer != guess && question == 1){
          document.getElementById("question").innerHTML = "Incorrect! Compound interest is accumulated continuously. This means that the amount of given interest is increasing in regular intervals.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          score--;
        }else if(answer == guess && question == 2){
          document.getElementById("question").innerHTML = "Correct! Cryptocurrency is a digital asset that can be used as a medium of exchange.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          jump();
        }else if (answer != guess && question ==2){
          document.getElementById("question").innerHTML = "Incorrect! Cryptocurrency is a digital asset that can be used as a medium of exchange.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          score--;
        }else if(answer == guess && question == 3){
          document.getElementById("question").innerHTML = "Correct! Stocks are high risk high reward!";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          jump();
        }else if (answer != guess && question ==3){
          document.getElementById("question").innerHTML = "Incorrect! Stocks are high risk high reward!";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          score--;
        }else if(answer == guess && question == 4){
          document.getElementById("question").innerHTML = "Correct! Return is the benefit that you recieve after an investment.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          jump();
        }else if (answer != guess && question ==4){
          document.getElementById("question").innerHTML = "Incorrect! Return is the benefit that you recieve after an investment.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          score--;
        }else if(answer == guess && question == 5){
          document.getElementById("question").innerHTML = "Correct! ROI or return on investment is the return divided by investment or cost.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          jump();
        }else if (answer != guess && question ==5){
          document.getElementById("question").innerHTML = "Incorrect! ROI or return on investment is the return divided by investment or cost.";
          $("#answers").css("display","none");
          $("#continue").css("display","block");
          score--;
        }
        question++;
      }
      function jump(){
        clearInterval(timer);
        var amount = 0;
        var increment=35;
        var x = true;
        var times = 0;
        var jump = setInterval(function () {
          amount+=increment;
          if(x){
          increment+=1.3;
          }else{
          increment-=1.3;
          }
          if(amount>=130){
            increment = -35;
            x= false;
          }
          $("#ikomo").css("bottom",amount);
          if(amount <= 0 && times<1){
            $("#ikomo").css("bottom","0");
            times++;
            increment = 50;
            x=true;
          }else if (amount<=0 && times>=1){
            $("#ikomo").css("bottom","0");
            clearInterval(jump);
          }
        }, 50);
    }
    </script>
    <img id = "ikomo" src = "../img/ikomos/duck.png">
    <script>
    var action = false;
    var movement;
    var behind = false;
    var oldMove=0;
    movementTimer = setInterval(function () {
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
      timer = setInterval(function () {
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
  </body>


 </html>
