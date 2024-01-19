<?php
$lignes = 9;
$colonnes = 5;

// Boucle externe pour les colonnes
for ($i = 1; $i <= $colonnes; $i++)
{
    // Boucle interne pour les lignes
    for ($j = 1; $j <= $lignes; $j++)
    {
        echo $j;
    }

    echo PHP_EOL;  // Ajout d'un saut de ligne après chaque colonne
}
?>