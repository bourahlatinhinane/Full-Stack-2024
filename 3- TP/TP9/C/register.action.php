<?php

/** @author Mathilde <mathilde.brx@gmail.com> */
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

//création d'un nouvel utilisateur à insérer dans la base de donnée

$nameUser = $_POST["Name_User"];
$firstnameUser = $_POST["FirstName_User"];
$mailUser = $_POST["Mail"];
$telUser = $_POST["Tel"];
$passwordUser = $_POST["password"];
$adresse = $_POST['adresse'];
$codepostal = $_POST['codepostal'];
$ville = $_POST['ville'];

$user1 = new User($nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser, $adresse, $codepostal, $ville);

//vérification des conditions avant de créer: name et firstname composés uniquement de lettres, tel composé uniquement de chiffres. 
if (
    ctype_alpha(str_replace(' ', '', $nameUser)) &&
    ctype_alpha(str_replace(' ', '', $firstnameUser)) &&
    ctype_digit($telUser) && // Vérifie si le numéro de téléphone est composé uniquement de chiffres
    ctype_digit($codepostal) && // Vérifie si le code postal est composé uniquement de chiffres
    ctype_alpha(str_replace(' ', '', $ville)) // Vérifie si le nom de la ville est composé uniquement de lettres et espaces
) {
DB_Manager::createUser($user1);
$res = array(
				'Name_User' => $nameUser, 
				'FirstName_User' => $firstnameUser,
                'Mail' => $mailUser,
				'Tel' => $telUser, 
				'password' => $passwordUser,
				'adresse' => $adresse,
                'codepostal' => $codepostal,
                'ville' => $ville
				);
} else {
  $res = array('status' => false);
}

echo json_encode($res);
//header("Location:../V/index.php");
