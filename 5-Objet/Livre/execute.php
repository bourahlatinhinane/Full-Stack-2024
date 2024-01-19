<?php
include "Livre.class.php"; 

$titre = "Programmer en C";
$auteur = "Claude Delannoy";
$prix = 350;


$livre = new Livre ($titre, $auteur, $prix );
$livre->afficher();
echo"\n";

?>