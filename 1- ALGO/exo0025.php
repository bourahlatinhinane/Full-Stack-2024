<?php
/* exo 25
Ecrire un algorithme saissant 2 variables entièrs qui calcule et qui affiche leur moyenne 

la reponse 
Écrire un algorithme saisissant 2 variables entières qui calcule et affiche leur moyenne. 
algorithme calcul la moyenne;
 Var a, b : entier; Var moy : réel; 
début 
 //affichage de variable
  afficher ("Donnez la  valeur 1"); 
  afficher ("Donnez la  valeur 2");
  
 //test 
  
     moy ← (a+b)/2; 
     Ecrire ("La moyenne est:", moy); 
fin
*/

$a = readline ("donner la valeur 1");
$b = readline ("donner la valeur 2");

//test
 
$moy = ($a + $b)/2;
echo ("la moyenne est: ").$moy


?>