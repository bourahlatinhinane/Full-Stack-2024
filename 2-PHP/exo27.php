<?php
/*
Exercice 3 : Multiplication de deux tableaux
Description : Écrivez un script PHP qui utilise une double boucle pour multiplier chaque élément d'un tableau par chaque élément d'un autre tableau, puis affichez les résultats.

*/
$tableau1 = [1, 2, 3];
$tableau2 = [4, 5, 6];
foreach ($tableau1 as $value1) {
    foreach ($tableau2 as  $value2) {
        $resultats = $value1 * $value2;
        echo "$resultats .\n ";
    }    

}