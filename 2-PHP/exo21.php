<?php
/*
Exercice 4 : Écrivez une fonction nommée "compterMots" qui prend une chaîne de caractères en entrée et renvoie le nombre de mots dans cette chaîne.
 
// Exemple d'utilisation :
$texte = "Ceci est un exemple de texte.";
$resultat = compterMots($texte); // Renvoie 6
*/
function compterMots ($texte){
    $nbrDeMots = str_word_count($texte);
    return $nbrDeMots;
}
$texte = "Ceci est un exemple de texte.";
$resultat = compterMots($texte);
echo "renvoie : " .$resultat;
