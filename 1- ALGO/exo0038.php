<?php
/* exo 38
ecrivez un algorithme permettant, toujours sur le même principe, à
l’utilisateur de saisir un nombre déterminé de valeurs. Le
programme, une fois la saisie terminée, renvoie la plus grande
valeur en précisant quelle position elle occupe dans le tableau. On
prendra soin d’effectuer la saisie dans un premier temps, et la
recherche de la plus grande valeur du tableau dans un second
Algorithme

la reponse :
Var n, i, PosMax: entier;
Tableau T() : entier;
*/
//variables 
$tab = array ();
$max = 0;
$nb = readline('entrez un nombre de valeurs: ');
$pos = 0;

//test
for ($i=1; $i <= $nb; $i++) { 
    $val = readline('entrez une valeur: ');
    $tab[$i] = $val;
    if ($max < $val){
        $max = $val;
        $pos = $i;
    }
}
//show
echo " la valeur max est $max à la position $pos ";
?>