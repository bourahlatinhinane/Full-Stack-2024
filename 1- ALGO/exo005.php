<?php
/*Exercice 5
    Quelles seront les valeurs des variables A, B,  aprés exécution 
    des instructions suivantes ? 
 
    Var A, B,  : Entier 
    début 
    A< 5
    B< 2
    A< B
    B< A
    FIN 
     
    la reponse :
    la valeur des variables est :
    A=5  B=?
    A=5  B=2
    A=2  B=2
    A=2  B=2

    */
    
    $a = 5;
    $b = 2;
    $a = $b;
    $b = $a; 
    echo "A=".$a;
    echo " & B=".$b;



    ?>