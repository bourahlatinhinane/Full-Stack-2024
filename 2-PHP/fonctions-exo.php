<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;

function nombre_places_parking  (int $nombre_places_parking, int $nombres_voitures):int{
   return $nombre_places_parking - $nombres_voitures; 
}
echo "il reste ".$nombre_places_parking - $nombres_voitures." place libre";

