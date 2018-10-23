<html>

   <head>
      <title>Hello World</title>
			<script lang = "php" src="./functions.php"></script>
   </head>

   <body>
     <?php
		 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		 $charactersLength = strlen($characters);
		 $randomString = '';
		 for ($i = 0; $i < 64; $i++) {
			 $randomString .= $characters[rand(0, $charactersLength - 1)];
		 }
		 echo $randomString ?>
   </body>

</html>
