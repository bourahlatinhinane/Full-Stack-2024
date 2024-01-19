<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

    <div class="formulaire">

       <form enctype="multipart/form-data" action="../C/loadstudentfrom.CSV.action.php" method="post">
          <input class="file" name="file" type="file" /> 

          <div class="button">  
              <input class="submit" name="submit" type="submit" value="valider" />
              <input type="radio" name="col"  value = "1">
              <input type="radio" name="col"  value = "2" >
              <input type="radio" name="col"  value = "3" >
              
          </div>   
       </form>
    </div>    
</div>




</body>
</html>