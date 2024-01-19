<?php
/*
Exercice 1 : Créez une fonction nommée "calculerCarre" qui prend un nombre en entrée et renvoie le carré de ce nombre.
// Exemple d'utilisation :
$resultat = calculerCarre(5); // Renvoie 25
*/
$resultat = calculerCarre(5);
function calculerCarre($nombre){
    $carre=$nombre * $nombre;
    echo $carre;
    return $carre;
    
}

