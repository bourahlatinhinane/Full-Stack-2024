<?php
/* exo 26
saisir 3 entiers a, b, c, et déterminer dans R les racines de l'équation
ax²+bx+c=0
 
la réponse :
var a, b, c, delta réel
debut
 //affichage de variable 
 afficher ("donner la valeur de a");
 afficher ("donner la valeur de b");
 afficher ("donner la valeur de c");

 D = b²-4ac
 Si D > 0 alors
 afficher « delta est positif donc f a deux racines »
 x = (-b – sqrt(D) )/2a
 y = (-b + sqrt(D) )/2a
 afficher x1 , y
 Sinon
 Si D=0 alors
 afficher « delta est nul donc f a une racine »
 x =-b /2a
 afficher x
 Sinon
 afficher « delta est négatif donc f n’a pas de racine »
fin 

 */

 //saisie de variables 
 $a = readline ("donner la valeur de a");
 $b = readline ("donner la valeur de b");
 $c = readline ("donner la valeur de c");

 $D = ($b * $b) - (4* $a * $c);
 $x1= (- $b - sqrt($D))/ 2 * $a;
 $y = (- $b + sqrt($D))/ 2 * $a;
 $x = - $b / (2 * $a);

 //test 

 if ($D==0) {
    echo"x = ".$x; 
 }
 elseif ($D > 0) {
    echo"x1 =".$x1. "y =".$y;
 }
 else {
    echo "delta est négatif donc f na pas de racine";
 }






 ?>


