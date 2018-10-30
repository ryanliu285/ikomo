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
     $UID = "Temporary";
     if($x=rand(1,100)<=32){
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
       $x = rand(1,4);
       if($Type == 1){
         if($x == 1){
           $Animal = "Mouse";
         } else if ($x == 2){
           $Animal = "Bunny";
         } else if ($x == 3){
           $Animal = "Lizard";
         } else{
           $Animal = "Blue Snail";
         }
       }
        else if ($Type == 2){
          if($x == 1){
            $Animal = "Shrimp";
          } else if ($x == 2){
            $Animal = "Squid";
          } else if ($x == 3){
            $Animal = "Sea Urchin";
          } else{
            $Animal = "Jellyfish";
          }
        }else if ($Type == 3){
          if($x == 1){
            $Animal = "Frog";
          } else if ($x == 2){
            $Animal = "Duck";
          } else if ($x == 3){
            $Animal = "Deer";
          } else{
            $Animal = "Pigeon";
          }
        }else {
          if($x == 1){
            $Animal = "Slime";
          } else if ($x == 2){
            $Animal = "Goblin";
          } else if ($x == 3){
            $Animal = "Fairy";
          } else{
            $Animal = "Jackalope";
          }
        }
     }else if ($Rarity == 2){
       $x = rand(1,8);
       if($Type == 1){
         if($x == 1){
           $Animal = "Snake";
         } else if ($x == 2){
           $Animal = "Ferret";
         } else if ($x == 3){
           $Animal = "Parrot";
         } else if ($x == 4){
           $Animal = "Cow";
         }else if($x == 5){
           $Animal = "Sheep";
         } else if ($x == 6){
           $Animal = "Pig";
         } else if ($x == 7){
           $Animal = "Calico Cat";
         } else{
           $Animal = "Chick";
         }}
        else if ($Type == 2){
          if($x == 1){
            $Animal = "Crab";
          } else if ($x == 2){
            $Animal = "Turtle";
          } else if ($x == 3){
            $Animal = "Stingray";
          } else if ($x == 4){
            $Animal = "Sea Horse";
          }else if($x == 5){
            $Animal = "Otter";
          } else if ($x == 6){
            $Animal = "Starfish";
          } else if ($x == 7){
            $Animal = "Clownfish";
          } else{
            $Animal = "Phytoplankton";
          }
        }else if ($Type == 3){
          if($x == 1){
            $Animal = "Brown Bear";
          } else if ($x == 2){
            $Animal = "Porcupine";
          } else if ($x == 3){
            $Animal = "Skunk";
          } else if ($x == 4){
            $Animal = "Fox";
          }else if($x == 5){
            $Animal = "Elephant";
          } else if ($x == 6){
            $Animal = "Bull";
          } else if ($x == 7){
            $Animal = "Monkey";
          } else{
            $Animal = "Moose";
          }
        }else {
          if($x == 1){
            $Animal = "Yeti";
          } else if ($x == 2){
            $Animal = "Hippocampus";
          } else if ($x == 3){
            $Animal = "Raptor";
          } else if ($x == 4){
            $Animal = "Direwolf";
          }else if($x == 5){
            $Animal = "Centaur";
          } else if ($x == 6){
            $Animal = "Triceratops";
          } else if ($x == 7){
            $Animal = "Troll";
          } else{
            $Animal = "Ghost";
          }
        }
      }else if ($Rarity == 3){
         $x = rand(1,3);
         if($Type == 1){
           if($x == 1){
             $Animal = "Husky";
           } else if ($x == 2){
             $Animal = "Llama";
           } else{
             $Animal = "Pomski";
           }}
          else if ($Type == 2){
            if($x == 1){
              $Animal = "Great White Shark";
            } else if ($x == 2){
              $Animal = "Octopus";
            } else{
              $Animal = "Penguin";
            }
          }else if ($Type == 3){
            if($x == 1){
              $Animal = "Lion";
            } else if ($x == 2){
              $Animal = "Tiger";
            } else{
              $Animal = "Giraffe";
            }
          }else {
            if($x == 1){
              $Animal = "Hydra";
            } else if ($x == 2){
              $Animal = "Phoenix";
            } else{
              $Animal = "Unicorn";
            }
          }
         }else{
           if($Type == 1){
            $Animal = "Shiba Inu";
          }
            else if ($Type == 2){
            $Animal = "Kraken";
            }else if ($Type == 3){
            $Animal = "Panda";
            }else {
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
                 "('$randomString','Temporary','$Rarity','$Type','$Animal')";
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
