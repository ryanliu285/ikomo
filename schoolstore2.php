<!DOCTYPE html>
 <html>
  <head>
    <style>
    @media only screen and (max-width: 991px) {
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
    #footer {
      font-family: "Dimbo";
      font-size: 25px;
      background-color: rgb(234, 254, 252);
      border-top-color: rgb(89, 154, 165);
      border-top-width: 5px;
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
    .bigbt{
      background-color: #F7E188;
      font-size: 20px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 70%;
    }
    .bigbt:hover {
      cursor: pointer;
    }
    #loggedin {
      display: none;
    }
    #buyButton {
      float:left;
    }
    #buyButton2 {
      float:right;
    }
    #iKOMOoverlay{
      display: none;
      z-index: 100000;
      height: 300px;
      width: auto;
      position: absolute;
      margin-top: 6%;
      margin-left: 75%;
    }
    #COINoverlay{
      display: none;
      z-index: 100000;
      height: 175px;
      width: auto;
      position: absolute;
      margin-top: 13%;
      margin-left: 80%;
    }
    #REDEEMoverlay{
      display: none;
      z-index: 100000;
      height: 175px;
      width: auto;
      position: absolute;
      margin-top: 13%;
      margin-left: 80%;
    }
  }
    @media only screen and (min-width: 992px) {
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
      #footer {
        font-family: "Dimbo";
        font-size: 25px;
        background-color: rgb(234, 254, 252);
        border-top-color: rgb(89, 154, 165);
        border-top-width: 5px;
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
      .bigbt{
        background-color: #F7E188;
        font-size: 20px;
        font-family: "Dimbo";
        text-decoration: none;
        text-align: center;
        border: none;
        border-bottom-color:  #daba38;
        border-bottom-width: 3px;
        border-bottom-style: solid;
        margin-top: 70%;
      }
      .bigbt:hover {
        cursor: pointer;
      }
      #loggedin {
        display: none;
      }
      #buyButton {
        float:left;
      }
      #buyButton2 {
        float:right;
      }
      #iKOMOoverlay{
        display: none;
        z-index: 100000;
        height: 300px;
        width: auto;
        position: absolute;
        margin-top: 6%;
        margin-left: 75%;
      }
      #COINoverlay{
        display: none;
        z-index: 100000;
        height: 175px;
        width: auto;
        position: absolute;
        margin-top: 13%;
        margin-left: 80%;
      }
      #REDEEMoverlay{
        display: none;
        z-index: 100000;
        height: 175px;
        width: auto;
        position: absolute;
        margin-top: 17%; /* +4 */
        margin-left: 84%; /* +4 */
      }
    }
  @media only screen and (min-width: 1537px) {
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
    #footer {
      font-family: "Dimbo";
      font-size: 25px;
      background-color: rgb(234, 254, 252);
      border-top-color: rgb(89, 154, 165);
      border-top-width: 5px;
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
    .bigbt{
      background-color: #F7E188;
      font-size: 20px;
      font-family: "Dimbo";
      text-decoration: none;
      text-align: center;
      border: none;
      border-bottom-color:  #daba38;
      border-bottom-width: 3px;
      border-bottom-style: solid;
      margin-top: 76%;
    }
    .bigbt:hover {
      cursor: pointer;
    }
    #loggedin {
      display: none;
    }
    #buyButton {
      float:left;
    }
    #buyButton2 {
      float:right;
    }
    #iKOMOoverlay{
      display: none;
      z-index: 100000;
      height: 300px;
      width: auto;
      position: absolute;
      margin-top: 20%; /* -5 */
      margin-left: 73%; /* -7 */
    }
    #COINoverlay{
      display: none;
      z-index: 100000;
      height: 175px;
      width: auto;
      position: absolute;
      margin-top: 28%;
      margin-left: 80%;
    }
    #REDEEMoverlay{
      display: none;
      z-index: 100000;
      height: 200px;
      width: auto;
      position: absolute;
      margin-top: 31%;
      margin-left: 82%;
    }
  }
  }    #disclaimtxt{
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
    </style>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "./animate.css"/>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bgstore">
      <div id = "tut">
        <div id = "tutorialText">
          <div class = "row">
            <div class = "col-md-2"><img src = "./img/ikomos/mantaray.png" width="auto" height="200px"></div>
            <div class = "col-md-9"class = "animated BounceInRight" id = "textBack" onclick = "next()">
              <p id = "1.1"><br>Welcome back to the store! (Click to continue!)</p>
              <p id = "2.1" class = "step"><br>This time, I'll show you how to get actual iKOMO! (Click to continue!)</p>
              <p id = "3.1" class = "step"><br>Click on the “Buy iKOMO! (Using 100 KOMOcoins)” Button.</p>
            </div>
          </div>
        </div>
      </div>
    <script>
    var current = 1;
      function next(){
        if(current == 2){
          $("#buyIkomo").attr("onclick","window.location.href = './schoolResult.php'");
          $("#buyButton2").addClass('animated heartBeat');
          $("#textBack").attr("onclick","");
        }
        setTimeout(function(){
          $("#textBack").removeClass('animated bounceInRight');
          $("#textBack").addClass('animated bounceOutRight');
          // var temp = document.getElementById(current+".2");
          // temp.style.display = 'none';
        }, 50);
        var temp = document.getElementById(current+".1");
        temp.style.display = 'none';
        current++;
        setTimeout(function(){
        $("#textBack").removeClass('animated bounceOutRight');
        $("#textBack").addClass('animated bounceInRight');
        var temp = document.getElementById(current+".1");
        temp.style.display = 'block';
        // var temp = document.getElementById(current+".2");
        // temp.style.display = 'block';
        }, 50);
      }
    </script>
    <style>
      #textBack{
        border-radius: 15px;
        background-color: rgba(136, 211, 229, 0.92);
        cursor:pointer;
        border-color: black;
      }
      #tutorialText{
        float:bottom;
      }
      #bootText{
        word-wrap: break-word;
      }
      .step{
        display:none;
      }
    </style>
    <div class = "container-fluid">
      <div class = "row">
        <div class = "col-md-3">
        </div>
        <div id = "mainWelcomeText" class = "col-md-5">
          <img id = "iKOMOoverlay" src = "./img/ikomos/bunny.png"/>
          <img id = "COINoverlay" src = "./img/ikocoin.png"/>
          <img id = "REDEEMoverlay" src = "./img/chickanim.gif"/>
            <a id = "buyCoins"><button class = "bigbt" id = "buyButton">Buy KOMOcoins (Using Virtual $)</button></a>
            <a id = "redeemCode"><button class = "bigbt" id = "buyButton3">Redeem Code</button></a>
            <a id = "buyIkomo"><button class = "bigbt" id = "buyButton2">Buy iKOMO! (Using 100 KOMOcoins)</button></a>
            <script>
            var ikool = document.getElementById('iKOMOoverlay');
            var reol = document.getElementById('REDEEMoverlay');
            var cool = document.getElementById('COINoverlay');
              $("#buyButton").mouseover(function(){
                cool.style.display = "block";
              });
              $("#buyButton").mouseout(function(){
                cool.style.display = "none";
              });
              $("#buyButton2").mouseover(function(){
                ikool.style.display = "block";
              });
              $("#buyButton2").mouseout(function(){
                ikool.style.display = "none";
              });
              $("#buyButton3").mouseover(function(){
                reol.style.display = "block";
              });
              $("#buyButton3").mouseout(function(){
                reol.style.display = "none";
              });
            </script>
            <script>
            var x;
            function logincheck(){
              $("#buyButton").prop("disabled",true);
              console.log("Check started");
              $.ajax({
                type: "GET",
                url: "logincheck.php",
                data: {  }
              }).done(function( msg ) {
                x = msg;
                console.log("Check ended");
                append();
              });
            }
            function append(){
              $("#mainWelcomeText").append(x);
            }
            function balancecheck(){
              console.log("Check started");
              $.ajax({
                type: "GET",
                url: "balancecheck.php",
                data: {  }
              }).done(function( msg ) {
                x = msg;
                console.log("Check ended");
                append();
              });
            }
            </script>
        </div>
        <div class = "col-md-4">

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
  <?php
        echo '<script type = "text/javascript">
        function progress (){
            var ol = document.getElementById(\'overlay\');
            var hol = document.getElementById(\'hoverlay\');
            var sol = document.getElementById(\'accountoverlay\');
            var lol = document.getElementById(\'loggedin\');
            var prg = document.getElementById(\'progress\');
            var counter = 0;
            var progress = 0;
            var percent = document.getElementById(\'percentCount\');
            var id = setInterval(frame,50);
            hol.style.display = "block";
            function frame(){
                if(progress >= 500 && counter >= 100){
                  clearInterval(id);
                  ol.style.display = "none";
                  hol.style.display = "none";
                  lol.style.display = "block";
                  $("#accountoverlay").addClass(\'animated bounceInUp\');
                  $("#shopButton").addClass(\'animated bounceInUp\');
                  $("#usernameanim").addClass(\'animated bounceInUp\');
                  $("#shopanim").addClass(\'animated bounceInUp\');
                }
                else{
                  progress += 10;
                  counter +=2;
                  prg.style.width = progress + \'px\';
                  percent.innerHTML = counter + \'%\';
                }
              }

          }
          progress();</script>
          ';
  ?>
 </html>
