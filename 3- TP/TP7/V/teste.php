<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salle informatique </title>
    <link rel="stylesheet" href="teste.css">
    
</head>

<body>
<?php
session_start();
//var_dump($_SESSION["students"]);
?>
<div class="container">
 <div class="formulaire">   
    <form enctype="multipart/form-data" action="cible_backend.php" method="post">
     <input class="file" name="file" type="file" /> 
    <div class="button">
      <input class="submit" name="submit" type="submit" value="valider" />
    </form>
  </div>

    <div class="salle informatique">
        <div class =  "left" >

            <div class="formateur table">
                <img src="image/formateur moussa.png" alt="" >
            </div>

            <div class="coffee-table table">
                <img src="image/café.png" alt="" >
            </div>

            
        </div>

        <div class="center-table table">
            <img src="image/image_2023-11-10_144749663-removebg-preview.png" alt="" >
        </div>
        <div class = "bureaux">
            <div class="left-table table">
            
                <div class= "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_1"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_2"] ?></span>
                </div>
                    <img src="image/place.png" alt="" >
                <div class= "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_3"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_4"] ?></span>
                </div>
                
                    
            </div>

            <div class="entrance-tables table">
                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_5"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_6"] ?></span>
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_7"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_8"] ?></span>
                </div>    
            </div>

            <div class="back-table table1">

                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_9"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_10"] ?></span> 
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_11"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_12"] ?></span>
                </div>    
            </div>

            <div class="back-table table2">
                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_13"] ?></span>
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_14"] ?></span>
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span><?php echo $_SESSION["studentsToDisplay"]["PLACE_15"] ?></span>
                    <span class = "span16"><?php echo $_SESSION["studentsToDisplay"]["PLACE_16"] ?></span>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>