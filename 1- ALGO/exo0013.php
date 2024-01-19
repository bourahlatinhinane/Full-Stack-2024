<?php
/* exo 13
Ecrire un algorithme qui demande un nombre à l’utilisateur, 
et l’informe ensuite si ce nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).  

la reponse:
Var n en entier
début 
 //saisie de variable
nbre < " entrez un nombre :"

si n > 0 alors
  ecrire " ce nombre est positif "
si non 
  ecrire " ce nombre est négatif "
  

*/
$nb = readline ("entrez un nombre: ");

if ($nb > 0) {
    echo "le nombre ".$nb . "est positif";
}
else {
    echo "le nombre ".$nb . "est négatif";
}
?>
