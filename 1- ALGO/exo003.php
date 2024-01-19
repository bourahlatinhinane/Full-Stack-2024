<?php
/*Exercice 3
    Quelles seront les valeurs des variables A, B,  aprés exécution 
    des instructions suivantes ? 
 
    Var A, B,  : Entier 
    début 
    A< 5
    B< A+4
    A< A+1
    B< A-4
    FIN 
     
    la reponse :
    la valeur des variables est :

    A=5    B=?
    A=5    B=A+4
    A=A+1  B=9
    A=6    B=2

*/

$a = 5;
$b = $a + 4;
$a = $a + 1;
$b = $a - 4;

 
echo "A=".$a;
echo " & B=".$b;

?>