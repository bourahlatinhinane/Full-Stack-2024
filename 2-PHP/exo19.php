<?php
/*
Exercice 2 : Écrivez une fonction nommée "calculerMoyenne" qui prend un tableau de nombres en entrée et renvoie la moyenne de ces nombres.
Utiliser les fonctions array_sum() et count() 
 
// Exemple d'utilisation :
$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres); // Renvoie 30
*/
$listeNombres = array(10, 20, 30, 40, 50);
$resultat = calculerMoyenne($listeNombres);

function calculerMoyenne ($tableau){
    if(count($tableau)>0){
        $somme = array_sum($tableau);
        $moyenne = $somme /count($tableau);
        echo $moyenne;
        return $moyenne;
    }else{
        echo $moyenne;
        return 0;
    }
    
}