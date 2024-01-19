<?php

include_once 'Voiture.class.php';
include_once 'Camion.class.php';

// Test de la classe Voiture
$voiture = new Voiture(2022, 25000);
echo "Informations de la voiture : " . $voiture . "\n";
echo $voiture->demarrer() . "\n";
echo $voiture->accelerer() . "\n\n";

// Test de la classe Camion
$camion = new Camion(2021, 50000);
echo "Informations du camion : " . $camion . "\n";
echo $camion->demarrer() . "\n";
echo $camion->accelerer() . "\n";
?>