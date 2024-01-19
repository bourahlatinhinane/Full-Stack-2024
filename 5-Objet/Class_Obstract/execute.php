<?php

include_once 'Developpeur.class.php';
include_once 'Manager.class.php';

// Création d'objets
$developpeur1 = new Developpeur('SALIM', 'Martin', 'slm.nmartin@Gmail.com', '12365456789', 2000, 'PHP');
$developpeur2 = new Developpeur('moussa', 'afhim', 'moussa.af@yahoo.com', '98765654321', 2500, 'Java');

$manager1 = new Manager('LACHGAR', 'Jean', 'lachhar.jean@outlook.com', '1112233487664', 1000, 'Informatique');
$manager2 = new Manager('nora', 'marichal', 'nor_marichal@uahoo.com', '55556666', 1500, 'Ressources Humaines');

// Affichage des informations
echo "\n";
echo $manager1->afficher();
echo "\n";
echo $developpeur1->afficher();
echo "\n";
echo $manager2->afficher();
echo "\n";
echo $developpeur2->afficher();
echo "\n";

// erreur
//$personne = new Personne('John', 'Doe', 'mail5@example.com', '77778888', 1000);

?>