<?php
/*
Exercice 8 : Créez un tableau de dates de naissance.
Utilisez une boucle foreach pour afficher l'âge de chaque personne en années.
*/

$birthdays = array("1990-05-15", "1985-12-10", "1998-03-25");

$today = date("Y-m-d");

foreach ($birthdays as $date) {
    $age = date_diff(date_create($date), date_create($today));
    echo 'Votre age est '.$age->format('%y')."\n";
}
?>


?>