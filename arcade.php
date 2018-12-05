<?php
require 'header.php';
require './includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html>
  <head>
  </head>
<body class = "comingsoonbg">
<?php
$res = mysqli_query("SELECT * FROM owners");
$row_cnt = mysqli_num_rows($res);
echo $row_cnt;
?>
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
