e<?php
/*
EXO 37
ecrivez un algorithme qui permette la saisie d'un nombre quelconque de valeurs. toutes les valeurs doivent étre ensuite
augmentées de 1, et le nouveau tableau sera afficher à l'ecran.
la reponse : 


declaration tableau et variable

$tab;
$somtab
$nbvaleurs
 
debut
 ecrire "nombre de valeur pour tableau "
 pour i allant de 0 a nbvaleurs
 ecrire les valeur du tableau
 ssomTab=  tab +1
 pour i allant de 0 a nbvaleurs  
 afficher tab
fin 
*/

 // Déclaration d'une variable affichant le tableau et une pour le tableau définitif

 $tab = array();
 $somTab = array();
 // Déclaration de la variable de nombre de valeurs à entrer dans le tableau

 $nbValeurs = readline ("Saisir le nombre de valeurs à entrer: ");
 for ($i=0; $i < $nbValeurs; $i++) {
     $tab[$i] = readline ("Saisir votre nombre: ");
   //$tab ; nom du tableau
   // [$i] incrposition  curseur
     $somTab[$i] = $tab[$i]++;
 }
 // utilisation boucle for pour afficher tableau complet
 for ($i=0; $i < $nbValeurs; $i++) {
     echo $tab[$i]. " | ";
 }
?> 
