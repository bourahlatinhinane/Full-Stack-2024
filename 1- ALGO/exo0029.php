<?php
/* exo 29
Ecrire un algorithme qui demande un nombre , calcule et affiche la
somme

Var i, n, som : entier;
début
  afficher (" Donnez n");


 som ← 0;
 pour i=1 à n faire
 som ← som+i*i*i

 afficher(" La somme cubiques des n entiers est : ").som;
fin
*/

//saisie de variable 

$n = readline ("donnez n");
$som == 0;
$som = $som + ($i* $i * $i);

for ($i=1; $i < $n ; $i++) { 
    echo ("la somme des n entiers est :").$som;
}


?>