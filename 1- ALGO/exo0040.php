<?php
/* exo 40 
Soit un tableau T à deux dimensions (12, 8) préalablement rempli
de valeurs numériques. Écrire un algorithme qui recherche la plus
grande valeur au sein de ce tableau.

*/

$tabGeneral = array (
    //i=row, j=column
    array(89,5,624,10,35,2,74,99),
    array(89,5,624,10,35,2,74,99),
    array(89,5,6204,10,35,2,754,99),
    array(89,5,624,10,350,2,74,99),
    array(89,5,624,1002,35,2,74,99),
    array(89,5,624,10,35,2,974,99),
    array(89,5,624,10,35,2,74,99),
    array(89,5,624,10,35,2,74,99999),
    array(89,295,624,10,35,20,74,99),
    array(89,5,624,10,35,2,74,99),
    array(89,5,624,10,3995,2,74,99),
    array(89,5,624,10,35,2,74,99));
    $max = -INF;  // Initialise la variable pour stocker la valeur maximale.

    // Parcourt le tableau bidimensionnel pour trouver la valeur maximale.
    for ($i = 0; $i < sizeof($tabGeneral); $i++) {
        for ($j = 0; $j < sizeof($tabGeneral[$i]); $j++) {
            if ($tabGeneral[$i][$j] > $max) {
                $max = $tabGeneral[$i][$j];
            }
        }
    }
    
    echo $max;  // Affiche la valeur maximale trouvée dans le tableau.

?>