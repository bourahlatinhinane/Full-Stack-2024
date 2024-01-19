<?php
include "Rectangle.class.php";
//  test
$long = readline (" Donner la longueur du rectangle ");
$larg = readline (" Donner la largeur du rectangle ");

$rectangle = new Rectangle($long, $larg );
$rectangle->afficherRectangle();


?>

