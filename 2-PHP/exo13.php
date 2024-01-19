<?php
/*
Exercice 6 : Créez un script qui génère une séquence de nombres de 5 en 5, commençant par 20 et s'arrêtant à 100 à l'aide d'une boucle "while".
 
*/
$num = 20;
while ($num <= 100) {
    echo $num . " ";
    $num += 5;
}