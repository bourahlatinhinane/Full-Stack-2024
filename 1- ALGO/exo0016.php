<?php
//exo 16
/*
Ecrire un algorithme qui demande un nombre à l'utilisateur, et l'informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas ou le nombre vaut zéro).
Algo nombre positif ou négatif, zéro inclus

 Début
 Demander à l'utilisateur d'entrer un nombre (nb)
 Si nb < 0 alors
       Afficher "Le nombre est négatif."
   Sinon, si nb == 0 alors
       Afficher "Le nombre est nul."
   Sinon
      Afficher "Le nombre est positif."
   
7. Fin

*/
$nb = readline ("entrez un nombre: ");

if ($nb < 0) {
    echo "ce nombre est négatif";
}
elseif ($nb == 0) {
    echo "ce nombre est nul";
}
else {
    echo "ce nombre est positif";
}

?>