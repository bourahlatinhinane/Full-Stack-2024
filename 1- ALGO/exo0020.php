<?php
/* exo 20
Ecrire un algorithme qui demande un nombre de départ, et qui calcule la somme des entiers jusqu’à ce nombre.
 Par exemple, si l’on entre 5, le programme doit calculer :1 + 2 + 3 + 4 + 5 = 15
 
 algorithme somme

 variables N, i, som entier 

 début 
   //saisie de variable
   nbr< "entrez un nombre :";
   som < som + i
   faire une boucle i en 1 par nbre
   afficher la somme
  fin

   */

  // saisie de variable
   $nbre = readline ("entrez un nombre: ");
   $som = 0;
  // faire la boucle

   for ($i = 1; $i <= $nbre; $i++) { 
    $som = $som + $i;
    echo " " .$som;
   }
   echo " " .$som;


?>
   