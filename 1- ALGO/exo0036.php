<?php
/*
exo 36 
algorithme somme;
Var i, j, n1, n2, S : entier;
Tableaux t1(), t2() : entier;
début
 afficher ( "Entrez la taille de t1 et t2: " );


 S ← 0;
 Pour i de 0 à n1 – 1 faire
 Pour j de 0 à n2 – 1 faire
 S ← S + t1(i) * t2(j);

 afficher( "Le schtroumpf est : ", S);
 fin 
*/
$tab1 = array (2, 5, 8, 4);
$tab2 = array (6, 7);

$s = 0;
//test
for ($i=0; $i < 4; $i++) { 
    for ($j=0 ; $j <2 ; $j++) { 
        $s= $s + $tab1 [$i] * $tab2 [$j];
    }
    echo ("le schtoumpf est: ") .$s;

}


?>