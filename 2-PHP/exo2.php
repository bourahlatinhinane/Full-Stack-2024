<?php
/*
Exercice 2 : Créez un tableau de produits avec des noms et des prix. 
Utilisez une boucle foreach pour calculer le prix total de tous les produits.
 */
$products = array(
    array("nom" => "T-shirt", "prix" => 15),
    array("nom" => "Pantalon", "prix" => 30),
    array("nom" => "Chaussures", "prix" => 50)
);
// $somme = 0;
// foreach ($products as $line) {
//     foreach ($line as $key => $value) {
//         if (is_int($value)) {
//            $somme = $somme + $value;
//         }
//     }
// }
// echo $somme;

/* solution 2 
*/

// $prix = 0;
// foreach ($products as $line) {
//     $prix += $line ["prix"];
// }
// echo $prix;

$total = 0;
foreach ($products as $product) {
    $total += $product["prix"]; // ajoute le prix de chaque produit au total
}
echo "le pris total de tout les produits : $total";