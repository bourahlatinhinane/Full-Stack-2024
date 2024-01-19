<?php

include 'Compte.class.php';
// Créer le client 1

echo "Compte 1:\n";
$client1 = new Client("EE111222", "Salim", "omar", "0612345678");
$compte1 = new Compte($client1);
echo "Détails du compte:\n";
$compte1->afficherResume();


$montantDepot1 = readline("Donner le montant à déposer: ");
$compte1->crediter(floatval($montantDepot1));
echo "Opération bien effectuée \n";
$compte1->afficherResume();

$montantRetrait1 = readline("Donner le montant à retirer: ");
$compte1->debiter(floatval($montantRetrait1));
echo "Opération bien effectuée\n";
$compte1->afficherResume();

// Créer le client 2
echo "Compte 2:\n";


$client2 = new Client("EE333444", "Karimi", "Samir", "0698765432");
$compte2 = new Compte($client2);

echo "Détails du compte:  \n";
$compte2->afficherResume();

// Crediter le compte 2 à partir du compte 1


echo "Crediter le compte 2 à partir du compte 1\n";
$montantDepot2 = readline("Donner le montant à déposer: ");
$compte2->crediterCpt(floatval($montantDepot2), $compte1);
echo "Opération bien effectuée  \n";
$compte1->afficherResume();
$compte2->afficherResume();

// Débiter le compte 1 et créditer le compte 2
echo "Débiter le compte 1 et créditer le compte 2 \n";

$montantRetrait2 = readline("Donner le montant à retirer: ");
$compte1->debiterCpt(floatval($montantRetrait2), $compte2);
echo "Opération bien effectuée \n";
$compte1->afficherResume();
$compte2->afficherResume();

// Afficher le nombre de comptes créés
echo "Le nombre de comptes créés: " . Compte::getNombreComptes() . " \n";







?>


