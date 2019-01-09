<?php
session_start();
$_SESSION['buyAMT'] = 100;
if(isset($_SESSION ['userID'])){
  echo '<style>
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
      border-bottom-width: 2px;
      border-bottom-style: solid;
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
    #vei {
      margin-top: 5px;
      margin-bottom: 5px;
    }
    #disclaimer {
      margin-top: 20px;
    }
    #signupoverlay {
      position: absolute;
      margin-top: -50%;
      z-index: 99999999999;
      background-color: rgba(235, 255, 253, 0.97);
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
  </style>
  <div id = "signupoverlay">
      <div class =  "container-fluid">
          <div class = "row">
              <div class = "col-md-1">
              </div>
              <div class = "col-md-10 signup">
                <center><h2>Instructions</h2></center>
                <!--ERROR HANDLING for Sign Up -->
                <h3>You are about to purchase 100 KOMOcoins. This is enough to purchase one iKOMO. Ensure that when buying KOMOcoins, you click the "return" button at the bottom after the checkout completes and that nothing else is in your virtual cart! <strong>If your KOMOcoins are not added PLEASE contact iKOMO support.</strong></h3>
                <!--TODO: Add image that shows what it looks like-->
                <a href = "https://portal.veinternational.org/buybuttons/us021804/btn/pouch-of-komocoins-100-ik100/"><button>Continue</button></a>
              </div>
              <div class = "col-md-1">
              </div>
              </div>
          </div>
      </div>
      <!--This script handles animations between login and sign up page divs. -->
      <script>$("#accountoverlay").addClass("animated bounceInUp");</script>';
    }else{
      echo "<script type='text/javascript'>alert('Please Log In!');</script>";
    }
