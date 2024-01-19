<?php
/*
Exercice 5 : Recherche d'un élément dans un tableau
Description : Écrivez un script PHP qui prend un tableau de nombres et un nombre à rechercher en entrée, puis utilise la fonction native in_array() pour déterminer si le nombre se trouve dans le tableau. Affichez un message approprié.
*/
$tableau = [1,3,4,5,6,7,9];
$nbrRechercher = 4;
rechercherDansTab ($tableau, $nbrRechercher);

function rechercherDansTab ($tableau, $nbr){
    if (in_array($nbr, $tableau)) {
        echo "le nombre $nbr se trouve dans le tableau.";
    }else {
        echo "le nombre $nbr se trouve pas dans le tableau.";
    }
}



?>