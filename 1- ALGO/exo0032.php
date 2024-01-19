<?php
/*
• ecrire un algorithme qui déclare un tableau de 9 notes, dont on fait
ensuite saisir les valeurs par l’utilisateur.
algorithme de note;
Tableau Note(8) : entier;
Var i : entier;

début
 Pour i de 0 à 8 faire
 afficher ("Entrez la note ", i );

fin
*/

$not = array();


for ($i=1; $i <= 9 ; $i++) { 
  $not[] = readline("entrez la note : $i" ); 
}

 echo "la valeur $not[5] ";
?>
