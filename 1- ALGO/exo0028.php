<?php
/* exo 28
ecrire l'algorithme permettant d'imprimer le triangle suivant, le
nombre de lignes étant donné par l'utilisateur :
1
12
123
1234
12345
123456
1234567

la reponse:

Var j, nbrline, i : entiers;
début
 afficher (‘Donnez le nombre de ligne du triangle’);
 
 pour i= 1 < nbrline 
 pour j=1 < i 

fin

*/
//affichage
$nbrline = readline ("donnez le nombre de ligne du triangle");
//test
for ($i = 1; $i <= $nbrline ; $i++) { 
    for ($j = 1; $j <= $i ; $j++) { 
        echo $j." ";
    }
    echo "\n";
}






?>