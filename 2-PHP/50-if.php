<?php

// Écrivez un bloc `if` qui affiche le message
// - `vrai` si `$var` est `true`
// - `faux` sinon

$var = (rand(0, 1) == 1) ? true : false;
if ($var = true) {
    echo $var;
    echo PHP_EOL;
    echo "vrai";
}else {
    echo $var;
    echo PHP_EOL;
    echo "faux";
};
?>
