<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable
$ville1 =[
"lille" => 5.9,
"paris" => 7.5,
"lyon"=> 6.9,
];
// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable
$ville2 =[
    "lille" => "ville1",
    "paris"=> "ville2",
    "lyon"=>"ville3",
];
// 3. Parcourir le premier tableau et afficher uniquement la valeur.
foreach ($ville1 as $key => $value) {
    echo $value;
};

// 4. Parcourir le premier tableau et afficher le clé et la valeur.
foreach ($ville2 as $key => $value) {
    echo "$ville2"."$value";
};
?>