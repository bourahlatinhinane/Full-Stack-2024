<?php
/*
Exercice 2 : Créez un script qui calcule la somme des nombres de 1 à 100 à l'aide d'une boucle "while".
*/
$somme = 0;
$num =1;

while ($num <= 100) {
    $somme += $num;
    $num++;
}
echo " la somme des nombres de 1 à 100 est:" . $somme;