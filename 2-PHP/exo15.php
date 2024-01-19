<?php
/*
Exercice 4 (Tableau Simple) : Créez un tableau de nombres. 
Trouvez le deuxième nombre le plus grand dans le tableau et affichez-le.
Utiliser un fonction de trie de tableau.
*/
$numbers = array(42, 67, 31, 88, 59, 74, 53);

// trie le tableau en ordre décroissant 

rsort($numbers);

// le deuxième nombre le plus grand est maintenant à l'index 1 car les tableau en php sont indexés a partir de 0

$deuxiemePlusGrand = $numbers[1];
echo "le deuxième nombre le plus grand dans le tableau est " .$deuxiemePlusGrand;

