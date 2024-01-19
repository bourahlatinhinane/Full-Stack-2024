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
<style>
  legend {
  font-size: 18px;
  font-weight: bold;
  color: #333333;
  margin-bottom: 20px;
  align-items:center;
  justify-content: center;
  
}


body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: bisque;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  width: 300px;
  margin: 20px;
  background-color: #ffffff;
  padding: 60px;
  border-radius: 30px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
  color: #333333;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 1px solid #cccccc;
  border-radius: 4px;
  border-radius: 30px;
}

input[type="submit"] {
  background-color: rgb(218, 163, 67);
  color: #ffffff;
  cursor: pointer;
  border: none;
}

input[type="submit"]:hover {
  background-color: #2980b9;
}

</style>
<body>
<form action="../C/readDBStudents.action.php" method="POST">
  <legend class ="titre"> ShuffleMaster </legend><hr>
    <button class = "bouton">Shuffle</button>
</form>

<form action="../C/insertDBStudents.action.php" method="POST">
  
  <legend class = "Ajout">Insertion d'un Nouveau Membre dans la BDD</legend><hr>
  <label for="name">NAME</label>
  <input name="name" type="text" minlength="2" maxlength="20" required />
	
  <label for="firstname">FIRSTNAME</label>
  <input name="firstname" type="text" minlength="2" maxlength="20" required />
  <label for="gender">GENDER</label>
  <input name="gender" type="text" />
  <input type="submit" value="envoyer" minlength="1" maxlength="20" required/>
</form> 




<form action="../C/updateDBStudents.action.php" method="POST">
  <legend class = "modif">Modification de Nom dans la BDD</legend><hr>

  <label for="newName">newNAME</label>
  <input name="newName" type="text" required/>
  <label for="idModif">id</label>
  <input name="idModif" type="text" required />
  <input type="submit" value="envoyer" />

</form>
<form action="../C/deleteDBStudents.action.php" method="POST">
  <legend class = "suppression">Retrait d'un Membre de la BDD</legend><hr>
  <label for="idStudents">id a supprimer</label>
  <input name="idStudents" type="text" required />
	<input type="submit" value="envoyer" />

</form>

</body>
</html>
