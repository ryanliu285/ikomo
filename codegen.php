<!DOCTYPE html>
<html>
<body><head>
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel = "stylesheet" type = "text/css" href = "main.css"/>
  <link rel = "stylesheet" type = "text/css" href = "animate.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <script>
  var x = 0;
  while(x<50){
  $.ajax({
    type: "POST",
    url: "codegen1.php",
    data: {},
    success: function(msg) {
    }
});
x++;}
x=0;  while(x<50){
  $.ajax({
    type: "POST",
    url: "codegen5.php",
    data: {},
    success: function(msg) {
    }
});
x++;}
x=0;  while(x<50){
  $.ajax({
    type: "POST",
    url: "codegen10.php",
    data: {},
    success: function(msg) {
    }
});
x++;}
x=0;  while(x<50){
  $.ajax({
    type: "POST",
    url: "codegen20.php",
    data: {},
    success: function(msg) {
    }
});
x++;}
x=0;  while(x<50){
  $.ajax({
    type: "POST",
    url: "codegen50.php",
    data: {},
    success: function(msg) {
    }
});
x++;}
x=0;
  </script>
</body>
</html>
