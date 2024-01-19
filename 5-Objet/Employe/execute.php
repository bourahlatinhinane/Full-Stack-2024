<?php
include "Employé.class.php";

$matricule = '10941';
$nom = 'Martin';
$prenom = 'Omar';
$dateNaissance = '1990-08-04';
$dateEmbauche = '2012-11-05';
$salaire = 10000;

// Créer un objet Employe 
$employe = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);

// Afficher les informations de l'employé
$employe->afficherEmploye();

$employe->augmentationDuSalaire();

// Afficher les informations après l'augmentation de salaire
echo "Après application de l'augmentation de salaire" . "\n";
$employe->afficherEmploye();

?>

