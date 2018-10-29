<html>

   <head>
      <title>iKomo</title>
   </head>

   <body>
     <?php

     //Traits of Ikomo: String, owner(userID), rarity, type, health
		 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		 $charactersLength = strlen($characters);
		 $randomString = '';
		 for ($i = 0; $i < 64; $i++) {
			 $randomString .= $characters[rand(0, $charactersLength - 1)];
		 }
     $UID = "Temporary";
     $Rarity = rand(1,4);
     $Type = rand(1,4);

     //Connect to database
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'owners';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     if(! $conn ) {
        die('Could not connect: ' . mysql_error());
     }
     $sql = "SELECT StringID FROM iKomo";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {

       // output data of each row
       while($row = $result->fetch_assoc()) {
         if($randomString===($row["StringID"])){
           echo "Error Generating StringID. Please try again";
           exit();
         }
       }

       //Insert iKomo

       $sql = "INSERT INTO iKomo ".
                 "(StringID, UID, Rarity, Type) "."VALUES ".
                 "('$randomString','Temporary','$Rarity','$Type')";
       if ($conn->query($sql) === TRUE) {
          //Announce iKomo traits
          echo "You got a iKOMO of type ";
          echo $Type;
          echo " and rarity ";
          echo $Rarity;
          echo " with an ID of ";
          echo $randomString;

       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }

     } else {
       echo 'Error';
     }


     $conn->close();

     ?>
   </body>

</html>
