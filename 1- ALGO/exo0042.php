<?php
/*
Exercice 42
Ecrire un algorithme triant un tableau par sélection.
On cherche l'élément de la plus petite valeur dans le tableau,
Le placer en tête du tableau,
Recommencer avec le tableau moins la première case.
Algo sort ascending
Variables tab, tmp : entier

debut
    //variables
    tab <- array(14,3,9,2,5);
    
    for (i <- 0; i < sizeof(tab); i++) {
        
        tmp <- INF;
        
        for (j <- i; j < sizeof(tab); j++) { 
            if (tmp > tab[j]){
                tmp <- tab[j];
                tab[j] <- tab[i];
                tab[i] <- tmp;
            }
        }
    }

    for (i=0; i < sizeof($tab) ; i++) { 
    echo tab[i]." | "; 
    }
fin
*/
$tab = array (14,3,9,2,5);
$tmp = 0;

for ($i=0; $i < sizeof($tab)-1 ; $i++) { 
   for ($j=0; $j < sizeof($tab)-1 ; $j++) { 
   if ($tab[$j] > $tab[$j+1]) {
    $tmp = $tab[$j+1];
    $tab[$j+1] = $tab[$j];
    $tab[$j] = $tmp;
   }
}
    }
for ($j=0; $j < sizeof($tab) ; $j++) { 
echo $tab[$j]."|";
}
 // Définit un tableau de nombres à trier.
$tab = array(14, 3, 9, 2, 5); 
// Variable temporaire pour effectuer les échanges.
$tmp = 0;  

// Boucle externe pour parcourir le tableau.
for ($i = 0; $i < sizeof($tab) - 1; $i++) { 
    // Boucle interne pour comparer et échanger les éléments.
    for ($j = 0; $j < sizeof($tab) - 1; $j++) { 
        // Compare les éléments adjacents et les échange s'ils sont dans le mauvais ordre.
        if ($tab[$j] > $tab[$j + 1]) {
            $tmp = $tab[$j + 1];
            $tab[$j + 1] = $tab[$j];
            $tab[$j] = $tmp;
        }
    }
}

// Affiche le tableau trié.
for ($j = 0; $j < sizeof($tab); $j++) { 
    echo $tab[$j] . "|";
}

    


?>
