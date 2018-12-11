<?php
require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    .aboutbg{
    background-image: url("./img/aquatic.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
    #aboutoverlay1{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    display: block;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    }
    #aboutoverlay2{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    display: none;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    }
    #aboutoverlay3{
    height: 70vh;
    margin-top: 20px;
    background-color: rgba(255,255,255,0.9);
    border-radius: 15px;
    border: solid;
    border-width: 10px;
    border-color: rgba(136, 211, 229, 0.92);
    display: none;
    }
    h2 {
      font-family: "Dimbo";
      font-size: 50px;
    }
    .message{
      height: 40vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 70vh;
    }
    .message2{
      height: 25vh;
      margin: 0;
      padding: 0;
      padding-left: 5px;
      padding-top: 5px;
      width: 70vh;
    }
    .input {
      width: 70vh;
    }
    .inputx {
      background-color: rgba(0,0,0,0);
      border: none;
      border-bottom-width: 4px;
      border-bottom-style: solid;
      border-bottom-color: rgba(89, 154, 165, 0.92);
      font-family: "Dimbo";
      font-size: 18px;
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
.success {
  color: rgb(22, 187, 25);
  font-size: 24px;
  font-family: ("Dimbo");
}
.failed {
  color: rgb(175, 18, 47);
  font-size: 24px;
  font-family: ("Dimbo");
}
.center {
  margin: 0 auto;
}
.image {
  margin-top: 10px;
  border-radius: 15px;
  border: solid;
  border-width: 10px;
  border-color: rgba(136, 211, 229, 0.92);
}
.vid {
  margin-top: 10px;
  border-radius: 15px;
  border: solid;
  border-width: 10px;
  border-color: rgba(136, 211, 229, 0.92);
}
.titles {
  margin-top: 10px;
}
#newsletterdownload {
  font-size: 30px;
}
#abttxt {
  font-size: 30px;
}
  </style>
  </head>
<body>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-md-2">

      </div>

      <div class = "col-md-8">
        <center><img class = "titles" width = "auto" src = "./img/abt.png"/><br>
        <p id = "abttxt">iKOMO promotes financial literacy through the power of fun. By combining blockchain technology with an imaginative outlet, iKOMO cultivates a community by allowing users to collect, trade, and interact with digital pets. iKOMO falls under the crypto-collectibles industry, which is a subset of the collectibles industry. Crypto-collectibles are similar to baseball cards in that they can be collected and traded by the owner, but on a digital platform. Every iKOMO pet is assigned a rarity level: common, rare, epic, or legendary, each with a different probability of hatching.
</p>
      </div>

      <div class = "col-md-2">

      </div>
    </div>
  </div>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-md-2">

      </div>

      <div class = "col-md-8">
        <center><img class = "titles" width = "auto" src = "./img/team.png"/><br>
        <img class = "image" width = "auto" src = "./img/ourteam.jpg"/><br></center>
      </div>

      <div class = "col-md-2">

      </div>
    </div>
  </div>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-md-2">

      </div>

      <div class = "col-md-8">
        <center><img class = "titles" width = "auto" src = "./img/commercial.png"/><br>
        <video class = "vid" height = "auto" controls> <source src = "./img/commercial.mp4"> Your browser does not support HTML5 video.</video><br></center>
      </div>

      <div class = "col-md-2">

      </div>
    </div>
  </div>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-md-2">

      </div>

      <div class = "col-md-8">
        <center><img class = "titles" width = "auto" src = "./img/newsletter.png"/><br>
        <p id = "newsletterdownload" >Current Issue: November/December 2018</p>
        <a id = "newsletterdownload" href = "./img/DECNewsletter.pdf">Click here to continue reading..</a>
        <img class = "image" width = "auto" src = "./img/newslettersnip.jpg"/><br></center>
      </div>

      <div class = "col-md-2">

      </div>
    </div>
  </div>
    </body>

    <script>
      $(".titles").height($(window).width()/10);
      $(".image").height($(window).height()/1.2);
      $(".vid").width($(window).width()/2.3);
    </script>
</html>
