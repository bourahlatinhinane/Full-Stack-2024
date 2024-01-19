<?php
session_start();
// var_dump($_SESSION["colonnes"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salle informatique </title>
    <link rel="stylesheet" href="teste.css">
    
</head>

<body>
<form action="../C/displayShuffle.action.php" method="POST">
    <button class = "bouton">Shuffle</button>
</form>
<input class="get" type = file accept =".csv" id="csv_table">

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
                    <span class = "span1"><?php echo $_SESSION["colonnes"][0][1] ?></span>
                    <span class = "span2"><?php echo $_SESSION["colonnes"][1][1] ?></span>
                </div>
                    <img src="image/place.png" alt="" >
                <div class= "places">
                    <span class = "span3"><?php echo $_SESSION["colonnes"][2][1]  ?></span>
                    <span class = "span4"><?php echo $_SESSION["colonnes"][3][1]  ?></span>
                </div>
                
                    
            </div>

            <div class="entrance-tables table">
                <div class = "places">
                    <span class = "span5"><?php echo $_SESSION["colonnes"][4][1]  ?></span>
                    <span class = "span6"><?php echo $_SESSION["colonnes"][5][1]  ?></span>
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span class = "span7"><?php echo $_SESSION["colonnes"][6][1]  ?></span>
                    <span class = "span8"><?php echo $_SESSION["colonnes"][7][1]  ?></span>
                </div>    
            </div>

            <div class="back-table table1">

                <div class = "places">
                    <span class = "span9"><?php echo $_SESSION["colonnes"][8][1]  ?></span>
                    <span class = "span10"><?php echo $_SESSION["colonnes"][9][1]  ?></span> 
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span class = "span11"><?php echo $_SESSION["colonnes"][10][1]  ?></span>
                    <span class = "span12"><?php echo $_SESSION["colonnes"][11][1]  ?></span>
                </div>    
            </div>

            <div class="back-table table2">
                <div class = "places">
                    <span class = "span13"><?php echo $_SESSION["colonnes"][12][1]  ?></span>
                    <span class = "span14"><?php echo $_SESSION["colonnes"][13][1]  ?></span>
                </div>
                <img src="image/place.png" alt="">
                <div class = "places">
                    <span class = "span15"><?php echo $_SESSION["colonnes"][14][1]  ?></span>
                    <span class = "span16"><?php echo $_SESSION["colonnes"][15][1]  ?></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



