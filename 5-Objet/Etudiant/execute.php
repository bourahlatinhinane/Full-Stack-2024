<?php

include "Etudiant.class.php";


// Créer trois filières
$filiere1 = new Filiere("info","Informatique");
$filiere2 = new Filiere("TIC","Techno de l'info et de communication");
$filiere3 = new Filiere("GC","Génie civil");

// Créer cinq étudiants avec des dates de naissance sous forme de DateTime
$etudiant1 = new Etudiant("Rashid", "Mohamed", new DateTime("1995-01-02"), $filiere1);
$etudiant2 = new Etudiant("Yves", "Chakib", new DateTime("1992-04-02"), $filiere1);
$etudiant3 = new Etudiant("Martin", "Manal", new DateTime("2011-03-02"), $filiere2);
$etudiant4 = new Etudiant("Jacques", "Meriem", new DateTime("2000-11-02"), $filiere3);
$etudiant5 = new Etudiant("Rami", "Mouad", new DateTime("2013-01-02"), $filiere3);

// Créer un tableau contenant les filières
$filieres = [$filiere1, $filiere2, $filiere3];

// Afficher la liste des filières
echo "La liste des filières de notre école :\n";
foreach ($filieres as $filiere) {
    echo $filiere . "\n";
}

// Créer un tableau contenant les étudiants
$etudiants = [$etudiant1, $etudiant2, $etudiant3, $etudiant4, $etudiant5];

// Afficher la liste des étudiants par filière
echo "Liste des étudiants par filière :\n";
foreach ($filieres as $filiere) {
    // Afficher le libellé de la filière
    echo $filiere . "\n";

    // Parcourir les étudiants et afficher ceux qui appartiennent à la filière en cours
    foreach ($etudiants as $etudiant) {
        if ($etudiant->getFiliere() == $filiere) {
            echo $etudiant . "\n";
        }
    }
    echo "\n";
}

?>