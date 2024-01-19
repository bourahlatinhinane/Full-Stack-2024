<?php
session_start();
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="teste.css">

</head>
<body>

<form action="../C/displayShuffle.action.php" method="POST">
    <button class = "bouton">Shuffle</button>
</form>
<div class="container">
 <div class="formulaire">   
    <form enctype="multipart/form-data" action="../C/getCSV.action.php" method="post">
     <input class="file" name="file" type="file" /> 
    <div class="button">
      <input class="submit" name="submit" type="submit" value="valider" />
    </form>
</div>

</body>
</html>
