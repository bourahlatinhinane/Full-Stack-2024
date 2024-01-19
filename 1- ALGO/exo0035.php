<?php
/*
EXO 35 
ecrivez un algorithme constituant un tableau, à partir de deux
tableaux de même longueur préalablement saisis. Le nouveau
tableau sera la somme des éléments des deux tableaux de départ.

reponse:

Var i, n : entier;
Tableaux tab1(), tab2(), tab3() : entier;
début
 afficher ( "Entrez le nombre de valeurs : " );

 
 Pour i de 0 à n – 1 
 tab3(i) ← tab1(i) + tab2(i);

fin
*/

$tab1 = array (4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array (7, 6, 5, 2, 1, 3, 7, 4);
$tab3 = array ();
//test
for ($i=0; $i < 8 ; $i++) { 
    $tab3[] = $tab1[$i] + $tab2[$i];
     echo $tab3[$i]." ";  
}



?>
