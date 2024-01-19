<?php
/*
Exercice 3 : Créez une fonction nommée "estPalindrome" qui prend une chaîne de caractères en entrée et renvoie vrai si la chaîne est un palindrome 
se lit de la même manière de gauche à droite et de droite à gauche), sinon renvoie faux.
 
// Exemple d'utilisation :
$resultat = estPalindrome("radar"); // Renvoie vrai
 
*/

function estPalindrome (string $chaine):string{
    $var = strrev($chaine);
    if ($chaine == $var){
       return "vrai";

    }else {
       return "faux";
    }
}
$resultat = estPalindrome("layal");
echo $resultat;

// function estPalindrome(String $var): String {
//     $palindrome = strrev($var);
//     if ($var == $palindrome) {
//        return "vrai";
//     }
//     else {
//        return "false";
//     }
// }

// $resultat = estPalindrome("radar");
// echo $resultat;