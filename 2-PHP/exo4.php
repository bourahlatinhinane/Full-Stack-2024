<?php
/*
Exercice 4 : Créez un tableau de nombres simple. 
Utilisez une boucle foreach pour déterminer si tous les nombres du tableau sont des nombres premiers.
 
$numbers = array(5, 7, 11, 15, 23);
 
function isPrime($num) : bool
*/
$numbers = array(5, 7, 11, 23);
 
function isPrime($num) : bool {
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;
    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }
    return true;
}
$num = 0;
foreach ($numbers as $num) {
    if (isPrime($num) == true) {
        $tampon = "vrai";
    }elseif (isPrime($num) == false) {
        $tampon= "faux";
        break;
    }
}
if ($tampon == "vrai") {
    echo  "les nombres du tableau sont des nombres premiers.";
} else {
    echo "les nombres du tableau sont pas tous des nombres premiers.";
}
?>