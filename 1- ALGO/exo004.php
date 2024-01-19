<?php
/*Exercice 4
    Quelles seront les valeurs des variables A, B, C aprés exécution 
    des instructions suivantes ? 
 
    Var A, B, C : Entier 
    début 
    A< 5
    B< 3
    C< A+B
    A< 2
    C< B-A
    FIN 

    la reponse :
    la valeurs des variables est:
    A=3  B=?   C=?
    A=3  B=10  C=?
    A=3  B=10  C=13
    A=3  B=13  C=13
    A=13 B=13  C=13 

    */

    $a = 3;
    $b = 10;
    $c = $a + $b;
    $b = $a + $b;
    $a = $c;
     
    echo "A=".$a." & B=".$b." & C=".$c;




    ?>