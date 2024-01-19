<?php
/*
ecrivez un algorithme permettant à l’utilisateur de saisir un
nombre quelconque de valeurs, qui devront être stockées dans un
tableau. L’utilisateur doit donc commencer par entrer le nombre de
valeurs qu’il compte saisir. Il effectuera ensuite cette saisie. Enfin,
une fois la saisie terminée, le programme affichera le nombre de
valeurs négatives et le nombre de valeurs positives.

Variables nb, nbpos, nbneg en entier
Tableau tab[] 
Variable i 
Debut
afficher "Entrez le nombre de valeurs :"
nbpos ← 0
nbneg ← 0
Pour i ← 0 à nb - 1
  afficher "Entrez le nombre n° ", i + 1
  
  Si tab[i] > 0 alors
    nbpos ← nbpos + 1
  Sinon
    nbneg ← nbneg + 1
  
 
afficher "Nombre de valeurs positives : ", nbpos
afficher "Nombre de valeurs négatives : ", nbneg
Fin

*/
$tab = array ( );
$nb = readline ("entrez le nombre de valeurs :");

$nbpos = 0;
$nbneg = 0;
for ($i=0; $i < $nb ; $i++) {
    $tab [] = readline ("entrez le nombre  $i :");

if ($tab > 0) {
    $nbpos = $nbpos + 1;
} else {
    $nbneg = $nbneg + 1;
}}
echo "nombre de valeurs positives :".$nbpos;
echo "nombre de valeurs négatives :".$nbneg;
    

?>