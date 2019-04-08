<!DOCTYPE html>
 <html>
  <head>
    <link rel = "stylesheet" type = "text/css" href = "main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    </style>
    <title>VEI iKOMO</title>
  </head>
  <body class = "bg">
    <div>
    <!-- Loading screen -->
    <div id = "overlay">
        <div id = "loading">
          <img id = "loadimage" height = "200px" width = "auto" src = "img/loadopt.gif">
        </div>
        <div class = "progress-bar">
          <div class = "progress" id = "progress"></div>
        </div>
        <div id = "percentCount" class = "percent-count">
        </div>
    </div>
    <br>
      <div id = "tut">
        <div id = "tutorialText">
          <div class = "row">
            <div class = "col-md-2"><img src = "./img/ikomos/mantaray.png" width="auto" height="200px"></div>
            <div class = "col-md-9"class = "animated BounceInRight" id = "textBack" onclick = "next()">
              <p id = "1.1"><br>Welcome to iKOMO school! My name is Mr. Mantaray and today I’ll be teaching you how to build your personal cryptokingdom. But before we begin collecting, there’s a few things we should understand about iKOMO. (Click to continue!)</p>
              <p id = "2.1" class = "step"><br>Every iKOMO has its own rarity level ranging from common to legendary and belongs to one of four categories being Domestic, Wild, Aquatic, and Mythic. Let’s go to the store located on the homepage and purchase our very own iKOMO! (Click to continue!)</p>
              <p id = "3.1" class = "step"><br>First, visit the store located in the iKOMO plaza.</p>
            </div>
          </div>
        </div>
      </div>
    <br>
    <br>
    <script>
    var current = 1;
      function next(){
        if(current == 2){
          $("#hme").attr("href","./schoolStore.php")
          $("#hme").addClass('animated heartBeat infinite');
          $("#textBack").attr("onclick","");
        }
        setTimeout(function(){
          console.log("a");
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
<div class = "test container-fluid">
                          <div class = "test row">
                            <div class = "test col-md-3">
                              <a id = "mkp" class = "bigbt buttonx">Marketplace</a>
                            </div>
                            <div class = "col-md-6 test">
                              <div class = "container-fluid test">
                              <div class = "row test">
                                <div class = "col-md-6 test">
                                    <a id = "str" class = "bigbt buttonx topb">Collection</a>
                                </div>
                                  <div class = "col-md-6 test">

                                    <a id = "hme" class = "bigbt buttonx topb">Store</a>
                                  </div>
                              </div>
                            </div>
                          </div>
                            <div class = "col-md-3 test">
                            <div id = "topblocker1 test">
                            </div>
                              <a id = "arc" class = "buttonx bigbt">Arcade</a>
                            </div>
                          </div>
                        </div>

      <!--This script handles animations between login and sign up page divs. -->
      <script>
      var sol = document.getElementById('signupoverlay');
      var lmol = document.getElementById('learnmoreoverlay');
      var aol = document.getElementById('accountoverlay');
        $("#aboutanim").click(function(){
          $("#learnmoreoverlay").removeClass('animated bounceOutLeft');
          $("#accountoverlay").removeClass('animated bounceOutLeft')
          $("#accountoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            aol.style.display = "none";
          }, 1000);
          setTimeout(function(){

            $("#learnmoreoverlay").addClass('animated bounceInRight');
            lmol.style.display = "block";
          }, 1000);
        });
        $("#signupanim").click(function() {
          $("#signupoverlay").removeClass('animated bounceOutLeft');
          $("#accountoverlay").removeClass('animated bounceInUp');
          $("#accountoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            aol.style.display = "none";
          }, 1000);
          setTimeout(function(){
            $("#signupoverlay").addClass('animated bounceInRight');
            sol.style.display = "block";
          }, 1000);
        });


      </script>
      <!--This script handles animations between login and learn more page divs. -->
      <script>
      var sol = document.getElementById('signupoverlay');
      var aol = document.getElementById('accountoverlay');
      var lmol = document.getElementById('learnmoreoverlay');
        $("#returnanim").click(function(){
          $("#signupoverlay").removeClass('animated bounceInRight');
          $("#signupoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            sol.style.display = "none";
          }, 1000);
          setTimeout(function(){
            $("#accountoverlay").removeClass('animated bounceOutLeft');
            $("#accountoverlay").addClass('animated bounceInRight');
            aol.style.display = "block";
          }, 1000);
        });
        $("#returnanim2").click(function(){
          $("#learnmoreoverlay").removeClass('animated bounceInRight');
          $("#learnmoreoverlay").addClass('animated bounceOutLeft');
          setTimeout(function(){
            lmol.style.display = "none";
          }, 1000);
          setTimeout(function(){
            $("#accountoverlay").removeClass('animated bounceOutLeft');
            $("#accountoverlay").addClass('animated bounceInRight');
            aol.style.display = "block";
          }, 1000);
        });
      </script>
    <div class = "container-fluid">
      <br>
      <div class = "row">
        <div class = "col-md-1">

        </div>
        <div class = "col-md-10">
          <div>

          </div>
        </div>
        <div class = "col-md-1">

        </div>
      </div>
      <br>
      <br>
      <br>
      </div>
    </div>
    <style>
    #tut{
       height:150px;
     }
    </style>

  </body>
  <!-- This function ensures that upon multiple website visits, the user does not have to load the same assets -->
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
