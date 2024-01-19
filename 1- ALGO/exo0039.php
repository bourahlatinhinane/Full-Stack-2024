<?php
/*
Exercice 39
Toujours et encore sur le même principe, écrivez un algorithme permettant, à l'utilisateur de saisir les notes d'une classe. Le programme, une fois la saisie terminée, renvoie 
le nombre de ces notes supérieures à la moyenne de la classe.
Algo average array
Variables tab, nb, max, sum, note:entier

begin
    //variables
    tab <- array();
    nb <- 5;
    max <- 0;
    sum <- 0;
    //test
    for (i <- 0; i < nb; i++){
        note <- 5;
        tab[i] <- note;    
        sum <- sum + tab[i];
    }
    average <- sum / nb;
    for(i <- 0; i < count(tab); i++){
        if (tab[i] > average){
        max++;
        }
    }
    //show
    show average and max;
fin
*/
 // Crée un tableau vide pour stocker les notes des élèves.
    $tab = array(); 
     // Demande à l'utilisateur d'entrer le nombre d'élèves.
    $nb = readline("Entrez le nombre d'élèves: "); 
    // Initialise une variable pour compter le nombre de notes supérieures à la moyenne.
    $max = 0;  
    // Initialise une variable pour stocker la somme des notes
    $sum = 0;  

    
    // Boucle pour saisir les notes des élèves.
    for ($i = 0; $i < $nb; $i++){
        // Demande à l'utilisateur d'entrer la note de l'élève.
        $note = readline('Entrez une note: ');
         // Stocke la note dans le tableau. 
        $tab[$i] = $note;  
        // Ajoute la note à la somme totale.
        $sum = $sum + $tab[$i];  
        
    }
     // Calcule la moyenne en divisant la somme totale par le nombre d'élèves.
    $average = $sum / $nb; 
    
    // Boucle pour compter le nombre de notes supérieures à la moyenne.
    for($i = 0; $i < count($tab); $i++){
        if ($tab[$i] > $average){
            $max++;  // Incrémente le compteur si la note est supérieure à la moyenne.
        }
    }
    
    // Affiche la moyenne et le nombre de notes supérieures à la moyenne.
    echo "La moyenne est de $average et il y a $max notes au-dessus de cette moyenne";
?>
