<?php
/* exo 21
Ecrire un algorithme qui demande un nombre de départ, et qui calcule sa factorielle.

variable N, i; f; en entier 
début
  attribuer une valeur à chiffre
  partir de un
  multiplier la factorialle de chaque entier jusqu'au nombre attribué
  afficher le resultat de la factorielle 
fin  

*/

$nbre = readline ("entrez un nombre: ");
$fact = 1;
// faire la boucle

for ($i=1; $i <= $nbre; $i++) { 
 $fact = $fact * $i;
 
}
//afficher resultat
echo ("$fact");
?>

