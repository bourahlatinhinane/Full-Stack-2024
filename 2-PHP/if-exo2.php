<?php

// Écrivez un bloc `if` qui affiche dans la console :
// - "a ou b est plus grand ou égal à 5" si `$a` est plus grand que `5` ou que `$b` est plus grand que `5`
// - "a et b sont plus petits que 5" dans tous les autres cas

$a = rand(0, 10);
$b = rand(0, 10);

echo "a = $a";
echo PHP_EOL;
echo "b = $b";
echo PHP_EOL;

if ($a >= 5 || $b >= 5) {
    echo "a et b sont plus grands que 5";
} else{
    echo "a et b sont plus petite que 5";
}

