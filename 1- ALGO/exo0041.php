<?php
/* exo 41

Ecrire l'algorithme effectuant le décalage des éléments d'un tableau vers la gauche.
tableau initial ("D","E","C","A","L","A","G","E")
tableau modifié: ("E","C","A","L","A","G","E","D")
Variables tab, temp: entier
begin
    //variables
    tab <- array("D","E","C","A","L","A","G","E");
    temp <- tab[0];
    //test
    for (i <- 0; i < sizeof(tab)-1; i++) { 
        tab[i] <- tab[i + 1];
    } 
        tab[7] <- temp;
    //show      
    for (i <- 0; i < sizeof(tab); i++) { 
        echo tab[i];
    }
end
*/
// Définit un tableau initial avec des lettre
$tab = array("D","E","C","A","L","A","G","E" );  s.
// Stocke la première valeur du tableau dans une variable temporaire.
$tmp = $tab[0];  

// Décale toutes les valeurs du tableau vers la gauche.
for ($i=0; $i < sizeof($tab)-1 ; $i++) {
    $tab[$i] = $tab[$i + 1]; 
}
// Vérifie si la dernière case du tableau existe.
if ($tab[7]) {  
    // Si oui, remplace la dernière case avec la valeur temporaire.
    $tab[7] = $tmp;  
}

// Affiche le tableau modifié.
for ($i=0; $i < sizeof($tab); $i++) { 
    echo $tab[$i];
}
?>