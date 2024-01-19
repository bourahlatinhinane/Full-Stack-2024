<?php
/* exo 27
Ecrire un algorithme qui permet donner le résultat d'un étudiant à
un module sachant que ce module est sanctionné par une note
d'oral de coefficient 1 et une note d'écrit de coefficient 2. La
moyenne obtenue doit être supérieure ou égale à 10 pour valider le
module.
la reponse:

Var n1, n2, moy est réel;
début
 afficher(" donnez la note d’oral");
 afficher (" donnez la note d’écrit");

 moy ← (n1+2*n2)/3
 si moy <10 Alors
 afficher(" module non validé ");
 sinon
 afficher(" module validé ");
fin
*/

//affichage 
$n1 = readline ("donnez la note d'oral");
$n2 = readline ("donnez la note d'ecrite");
$moy = ($n1+2 * $n2)/3;

//test
if ($moy < 10) {
    echo "module non validé";
} else {
    echo "modul validé";
}




?>