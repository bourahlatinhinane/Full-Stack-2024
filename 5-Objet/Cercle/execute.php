<?php
include 'Cercle.class.php';

$x =  readline("Donner l'abscisse du centre: ");
$y =  readline("Donner l'ordonnée du centre: ");
$r = readline("Donner le rayon: ");

$Cercle = new Cercle($x, $y, $r);

echo "\n";
$Cercle->afficher();

echo "Le périmètre est : " . $Cercle->getPerimetre() . "\n";
echo "La surface est : " . $Cercle->getSurface() . "\n";

echo "Donner un point: \n";

$x = readline("X: ");
$y = readline("Y: ");


if ($Cercle->appartient($x, $y)) {
    echo "Le point ($x, $y) appartient au cercle\n";
} else {
    echo "Le point ($x, $y) n'appartient pas au cercle\n";
}



?>