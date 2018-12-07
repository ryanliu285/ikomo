<?php
session_start();
?>
<html>

   <head>
      <title>iKOMO</title>
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
     $UID = $_SESSION['userID'];
     echo "<script>console.log( {$_SESSION['userID']} );</script>";
     $x = rand(1,100);
     echo "<script>console.log( $x );</script>";
     if($x<=32){
       $Rarity = 1;
     }else if ($x<=83){
       $Rarity = 2;
     }else if ($x<=98){
       $Rarity = 3;
     }else{
       $Rarity = 4;
     }
     $Animal = "";
     $Type = rand(1,4);
     if($Rarity == 1){
       $x = rand(1,16);
         if($x == 1){
           $Type = 1;
           $Animal = "Mouse";
         } else if ($x == 2){
           $Type = 1;
           $Animal = "Bunny";
         } else if ($x == 3){
           $Type = 2;
           $Animal = "Lizard";
         } else if ($x == 4){
           $Type = 1;
           $Animal = "Blue Snail";
         }
          else if($x == 5){
            $Type = 2;
            $Animal = "Shrimp";
          } else if ($x == 6){
            $Type = 2;
            $Animal = "Squid";
          } else if ($x == 7){
            $Type = 2;
            $Animal = "Sea Urchin";
          } else if ($x == 8){
            $Type = 2;
            $Animal = "Jellyfish";
          }
          else if($x == 9){
            $Type = 3;
            $Animal = "Frog";
          } else if ($x == 10){
            $Type = 3;
            $Animal = "Duck";
          } else if ($x == 11){
            $Type = 3;
            $Animal = "Deer";
          } else if ($x == 12){
            $Type = 3;
            $Animal = "Pigeon";
          }
          else if($x == 13){
            $Type = 4;
            $Animal = "Slime";
          } else if ($x == 14){
            $Type = 2;
            $Animal = "Goldfish";
          } else if ($x == 15){
            $Type = 1;
            $Animal = "Turkey";
          } else{
            $Type = 4;
            $Animal = "Jackalope";
          }
        }
     else if ($Rarity == 2){
       $x = rand(1,28);
         if($x == 1){
           $Type = 1;
           $Animal = "Snake";
         } else if ($x == 2){
           $Type = 1;
           $Animal = "Ferret";
         } else if ($x == 3){
           $Type = 1;
           $Animal = "Parrot";
         } else if ($x == 4){
           $Type = 1;
           $Animal = "Cow";
         }else if($x == 5){
           $Type = 1;
           $Animal = "Sheep";
         } else if ($x == 6){
           $Type = 1;
           $Animal = "Pig";
         } else if ($x == 7){
           $Type = 1;
           $Animal = "Calico Cat";
         } else if ($x == 8){
           $Type = 1;
           $Animal = "Chick";
         }
          else if($x == 9){
            $Type = 2;
            $Animal = "Crab";
          } else if ($x == 10){
            $Type = 2;
            $Animal = "Turtle";
          } else if ($x == 11){
            $Type = 2;
            $Animal = "Manta Ray";
          } else if ($x == 12){
            $Type = 2;
            $Animal = "Sea Horse";
          }else if($x == 13){
            $Type = 2;
            $Animal = "Otter";
          } else if ($x == 14){
            $Type = 2;
            $Animal = "Starfish";
          } else if ($x == 15){
            $Type = 2;
            $Animal = "Clownfish";
          } else if ($x == 16){
            $Type = 2;
            $Animal = "Koi";
          }
          else if($x == 17){
            $Type = 3;
            $Animal = "Brown Bear";
          } else if ($x == 18){
            $Type = 3;
            $Animal = "Porcupine";
          } else if ($x == 19){
            $Type = 3;
            $Animal = "Skunk";
          } else if ($x == 20){
            $Type = 3;
            $Animal = "Fox";
          }else if($x == 21){
            $Type = 3;
            $Animal = "Elephant";
          } else if ($x == 22){
            $Type = 3;
            $Animal = "Bull";
          } else if ($x == 23){
            $Type = 3;
            $Animal = "Monkey";
          } else if ($x == 24){
            $Type = 3;
            $Animal = "Moose";
          }
          else if($x == 25){
            $Type = 3;
            $Animal = "Zebra";
          } else if ($x == 26){
            $Type = 3;
            $Animal = "Road Runner";
          } else if ($x == 27){
            $Type = 1;
            $Animal = "Munchkin Cat";
          } else{
            $Type = 3;
            $Animal = "Flying Squirrel";
          }
      }else if ($Rarity == 3){
         $x = rand(1,12);
           if($x == 1){
             $Type = 1;
             $Animal = "Husky";
           } else if ($x == 2){
             $Type = 1;
             $Animal = "Llama";
           } else if($x == 3){
             $Type = 1;
             $Animal = "Pomski";
           }
            else if($x == 4){
              $Type = 2;
              $Animal = "Great White Shark";
            } else if ($x == 5){
              $Type = 2;
              $Animal = "Octopus";
            } else if ($x == 6){
              $Type = 2;
              $Animal = "Penguin";
            }
            else if($x == 7){
              $Type = 3;
              $Animal = "Lion";
            } else if ($x == 8){
              $Type = 3;
              $Animal = "Tiger";
            } else if ($x == 9){
              $Type = 3;
              $Animal = "Giraffe";
            }
            else if($x == 10){
              $Type = 3;
              $Animal = "Koala";
            } else if ($x == 11){
              $Type = 4;
              $Animal = "Phoenix";
            } else{
              $Type = 4;
              $Animal = "Unicorn";
            }

         }else{
           $x = rand(1,4);
           if($x == 1){
             $Type = 1;
            $Animal = "Shiba Inu";
          }else if ($x == 2){
            $Type = 2;
            $Animal = "Orca";
          }else if ($x == 3){
            $Type = 3;
            $Animal = "Panda";
          }else{
            $Type = 4;
            $Animal = "Dragon";
          }
           }


     //Connect to database
     $dbhost = 'db759106289.hosting-data.io';
     $dbuser = 'dbo759106289';
     $dbpass = 'SPdidsway1st';
     $dbname = 'db759106289';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
     if(! $conn ) {
        die('Could not connect: ' . mysql_error());
     }
     $sql = 'SELECT KOMOcoins FROM iKOMODB WHERE idUsers = '.$UID.'';
     $coins = 0;
     $result = mysqli_query($conn, $sql)->fetch_object()->KOMOcoins;
     $coins = $result-=100;
     $sql = 'UPDATE iKOMODB SET KOMOcoins = '.$coins.' WHERE idUsers = '.$UID.'';
     $result = mysqli_query($conn,$sql);

     $sql = "SELECT StringID FROM owners";
     $result = $conn->query($sql);

     if ($result->num_rows >= 0) {

       // output data of each row and check stringID
       while($row = $result->fetch_assoc()) {
         if($randomString===($row["StringID"])){
           echo "Error Generating StringID. Please try again";
           die();
         }
       }

       //Insert iKomo
       $sql = "INSERT INTO owners ".
                 "(StringID, UID, Rarity, Type, Animal) "."VALUES ".
                 "('$randomString',$UID,'$Rarity','$Type','$Animal')";
       if ($conn->query($sql) === TRUE) {
          //Announce iKomo traits
          if($Type = 1){
            $_SESSION["type"] = "domestic";
          }else if ($Type = 2){
            $_SESSION["type"] = "aquatic";
          }else if ($Type = 3){
            $_SESSION["type"] = "wild";
          }else{
            $_SESSION["type"] = "mythic";
          }
          $_SESSION["animal"] = $Animal;
          if($Rarity==1){
            $_SESSION["rarity"] = "common ";
          }else if ($Rarity == 2){
            $_SESSION["rarity"] = "rare";
          }else if ($Rarity == 3){
            $_SESSION["rarity"] =  "epic";
          }else {
            $_SESSION["rarity"] = "legendary";
          }
          $_SESSION["randomString"] =  $randomString;

       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }

     } else {
       echo 'Error';
     }

     $conn->close();

     echo "<script> window.location.href = '../../result.php'</script>";
     exit();
     ?>
   </body>

</html>
