<?php
session_start();
?>
<html>

   <head>
      <title>iKOMO</title>
   </head>

   <body>
     <?php
     //TODO: CHECK IF USER IS LOGGED IN AND IF THEY PAYED. OTHERWISE THEY CAN JUST GO
     //DIRECTLY TO THE LINKN AND JUST PULL
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
           $Type == 1;
           $Animal = "Mouse";
         } else if ($x == 2){
           $Type == 1;
           $Animal = "Bunny";
         } else if ($x == 3){
           $Type == 2;
           $Animal = "Lizard";
         } else if ($x == 4){
           $Type == 1;
           $Animal = "Blue Snail";
         }
          else if($x == 5){
            $Type == 2;
            $Animal = "Shrimp";
          } else if ($x == 6){
            $Type == 2;
            $Animal = "Squid";
          } else if ($x == 7){
            $Type == 2;
            $Animal = "Sea Urchin";
          } else if ($x == 8){
            $Type == 2;
            $Animal = "Jellyfish";
          }
          else if($x == 9){
            $Type == 3;
            $Animal = "Frog";
          } else if ($x == 10){
            $Type == 3;
            $Animal = "Duck";
          } else if ($x == 11){
            $Type == 3;
            $Animal = "Deer";
          } else if ($x == 12){
            $Type == 3;
            $Animal = "Pigeon";
          }
          else if($x == 13){
            $Type == 4;
            $Animal = "Slime";
          } else if ($x == 14){
            $Type == 2;
            $Animal = "Goldfish";
          } else if ($x == 15){
            $Type == 1;
            $Animal = "Turkey";
          } else{
            $Type == 4;
            $Animal = "Jackalope";
          }
        }
     else if ($Rarity == 2){
       $x = rand(1,28);
         if($x == 1){
           $Type == 1;
           $Animal = "Snake";
         } else if ($x == 2){
           $Type == 1;
           $Animal = "Ferret";
         } else if ($x == 3){
           $Type == 1;
           $Animal = "Parrot";
         } else if ($x == 4){
           $Type == 1;
           $Animal = "Cow";
         }else if($x == 5){
           $Type == 1;
           $Animal = "Sheep";
         } else if ($x == 6){
           $Type == 1;
           $Animal = "Pig";
         } else if ($x == 7){
           $Type == 1;
           $Animal = "Calico Cat";
         } else if ($x == 8){
           $Type == 1;
           $Animal = "Chick";
         }
          if($x == 9){
            $Type == 2;
            $Animal = "Crab";
          } else if ($x == 10){
            $Type == 2;
            $Animal = "Turtle";
          } else if ($x == 11){
            $Type == 2;
            $Animal = "Manta Ray";
          } else if ($x == 12){
            $Type == 2;
            $Animal = "Sea Horse";
          }else if($x == 13){
            $Type == 2;
            $Animal = "Otter";
          } else if ($x == 14){
            $Type == 2;
            $Animal = "Starfish";
          } else if ($x == 15){
            $Type == 2;
            $Animal = "Clownfish";
          } else if ($x == 16){
            $Type == 2;
            $Animal = "Phytoplankton";
          }
          if($x == 17){
            $Type == 3;
            $Animal = "Brown Bear";
          } else if ($x == 18){
            $Type == 3;
            $Animal = "Porcupine";
          } else if ($x == 19){
            $Type == 3;
            $Animal = "Skunk";
          } else if ($x == 20){
            $Type == 3;
            $Animal = "Fox";
          }else if($x == 21){
            $Type == 3;
            $Animal = "Elephant";
          } else if ($x == 22){
            $Type == 3;
            $Animal = "Bull";
          } else if ($x == 23){
            $Type == 3;
            $Animal = "Monkey";
          } else if ($x == 24){
            $Type == 3;
            $Animal = "Moose";
          }
          else if($x == 25){
            $Type == 3;
            $Animal = "Zebra";
          } else if ($x == 26){
            $Type == 3;
            $Animal = "Wolf";
          } else if ($x == 27){
            $Type == 1;
            $Animal = "Munchkin Cat";
          } else{
            $Type == 3;
            $Animal = "Flying Squirrel";
          }
      }else if ($Rarity == 3){
         $x = rand(1,12);
           if($x == 1){
             $Type == 1;
             $Animal = "Husky";
           } else if ($x == 2){
             $Type == 1;
             $Animal = "Llama";
           } else if($x == 3){
             $Type == 1;
             $Animal = "Pomski";
           }
            if($x == 4){
              $Type == 2;
              $Animal = "Great White Shark";
            } else if ($x == 5){
              $Type == 2;
              $Animal = "Octopus";
            } else if ($x == 6){
              $Type == 2;
              $Animal = "Penguin";
            }
            else if($x == 7){
              $Type == 3;
              $Animal = "Lion";
            } else if ($x == 8){
              $Type == 3;
              $Animal = "Tiger";
            } else if ($x == 9){
              $Type == 3;
              $Animal = "Giraffe";
            }
            else if($x == 10){
              $Type == 3;
              $Animal = "Koala";
            } else if ($x == 11){
              $Type == 4;
              $Animal = "Phoenix";
            } else{
              $Type == 4;
              $Animal = "Unicorn";
            }

         }else{
           $x = rand(1,4);
           if($x == 1){
             $Type == 1;
            $Animal = "Shiba Inu";
          }else if ($x == 2){
            $Type == 2;
            $Animal = "Orca";
          }else if ($x == 3){
            $Type == 3;
            $Animal = "Panda";
          }else{
            $Type == 4;
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
     $sql = "SELECT StringID FROM owners";
     $result = $conn->query($sql);

     if ($result->num_rows >= 0) {

       // output data of each row and check stringID
       while($row = $result->fetch_assoc()) {
         if($randomString===($row["StringID"])){
           echo "Error Generating StringID. Please try again";
           exit();
         }
       }

       //Insert iKomo

       $sql = "INSERT INTO owners ".
                 "(StringID, UID, Rarity, Type, Animal) "."VALUES ".
                 "('$randomString',$UID,'$Rarity','$Type','$Animal')";
       if ($conn->query($sql) === TRUE) {
          //Announce iKomo traits
          echo "You got a";
          if($Type == 1){
            echo " domestic ";
          }else if ($Type == 2){
            echo " aquatic ";
          }else if ($Type == 3){
            echo " wild ";
          }else{
            echo " mythic ";
          }
          echo $Animal;
          echo " iKOMO that is ";
          if($Rarity==1){
            echo "common ";
          }else if ($Rarity == 2){
            echo "rare ";
          }else if ($Rarity == 3){
            echo "epic ";
          }else {
            echo "legendary ";
          }
          echo "with an ID of ";
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
