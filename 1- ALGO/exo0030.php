<?php
/* exo 30
donnez le résultat de la multiplication de deux nombres en ne faisant que des addition

la reponse :
algo multiplication 
var a, b, i, res en entier 

début
 //affichage 
 afficher ("donnez la valeur a, b");
 res <- 0

 //test
 pour i de 1 à b faire 
 res <- res + a;
fin
*/
$a = readline ("donnez la valeur de a");
$b = readline ("donnez la valeur de b");
$res = 0;
//test
for ($i=0; $i < $b; $i++) { 
   $res = $res + $a;
}
echo $res ;




?>