<?php

include_once "Professeur.class.php";
include_once "Etudiant.class.php";


// Création d'objets
$employe1 = new Employe(1, "DOUK", "Rachid", 10000.0);
$employe2 = new Employe(2, "NGOYE", "Roland", 10000.0);

$etudiant1 = new Etudiant(3, "OBAKA", "Med", "65678754");
$etudiant2 = new Etudiant(4, "ALSENY", "Thomas", "87543543");

$professeur1 = new Professeur(5, "OBA", "Kevin", 5700.0, "JAVA/JEE");
$professeur2 = new Professeur(6, "MAGASSOUBA", "Cheick", 5000.0, "PHP");

// Affichage des informations
echo "La liste des employés:\n";
echo $employe1->toString() . "\n";
echo $employe2->toString() . "\n";

echo "\n*************\n";  

echo "\nLa liste des étudiants:\n";
echo $etudiant1->toString() . "\n";
echo $etudiant2->toString() . "\n";

echo "\n*************\n";  


echo "\nLa liste des professeurs:\n";
echo $professeur1->toString() . "\n";
echo $professeur2->toString() . "\n";

echo "\n*************";  