<?php
include_once "../M/lib_functions.php";
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
/*echo '<pre>';
var_dump($_GET);
echo '</pre>';
echo '</pre>';

var_dump($_POST);
var_dump($_GET);
if ($_POST['prenom'] == 'moussa'){
	var_dump($_POST);
	header('Location: ../views/get1_success.php');
}else{
	header('Location: ../views/get1_error.php');
}*/




$name = $_POST['name'];
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];

if(isAlpha($_POST["name"]) && isAlpha($_POST["firstname"]) && isAlpha($_POST["gender"])) 
  {
    header("Location:../V/get1_success.php");
    insertStudents($name, $firstname, $gender);
  }else {
    header("Location:../V/get1_error.php");
}

?>