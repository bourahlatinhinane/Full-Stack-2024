<?php
/*
exo 34
ecrivez un algorithme calculant la somme des valeurs d'un tableau ( ou suppose que le tableau à été préalablement saisi)

reponse : 
algorithme somme;
Var i, som, N : entier;
Tableau T() : entier;
début
afficher ( "Entrez le nombre de valeurs : " );

som ← 0;
Pour i de 0 à n – 1 faire
som ← som + tab(i);
afficher ("Somme des éléments du tableau : ", som);
fin
*/
$tab = array ( );
$nb = realine ("entrez le nombre de valeurs :");
$som = 0;
for ($i=0; $i < $nb; $i++) { 
   $som = $som + $tab($i);
}
echo "la somme des éléments du tableau $som :"
?>