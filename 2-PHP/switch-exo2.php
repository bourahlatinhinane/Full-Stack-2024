<?php

/*

traduire les blocs conditionnels `if` en blocs conditionnels `switch`

résultat attendu :
vous êtes sur la page d'accueil

*/

$page = 'home';

// if ($page == 'about') {
    
// } else if ($page == 'contact') {
//     echo 'vous êtes sur la page « contact »';
//     echo PHP_EOL;
// } else if ($page == 'home') {
//     echo 'vous êtes sur la page d\'accueil';
//     echo PHP_EOL;
// } else {
//     echo 'page non trouvée :(';
//     echo PHP_EOL;
// }

switch ($page) {
    case "about":
        echo 'vous êtes sur la page « à propos »';
        echo PHP_EOL;
        break;
    case "contact":
        echo 'vous êtes sur la page « contact »';
        echo PHP_EOL;
        break;
    case "home":
        echo 'vous êtes sur la page d\'accueil';
        echo PHP_EOL;
        break;    
    default:
        echo 'page non trouvée :(';
        echo PHP_EOL;
        break;
}

