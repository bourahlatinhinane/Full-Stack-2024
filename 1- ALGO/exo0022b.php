<?php
/*
 exo22B
 modifiez ensuite l'algorithme pour que le programme affiche de sucroît en quelle position avait été
 saisie se nombre 

 variable N; i; plus grand; pos:

 début
 // saisie de variable
 plusgrand <- 0
 // traitement
 i <- 1 à 20
 nbre "entrez un nombre= "
 si i=0 ou n > plusgrand donc 
 plusgrand <- nbre
 pos <- i
 afficher " le nombre le plus grand : ",plusgrand
 afficher " il à éte saisie se nombre en position  : ",pos

fin
 

*/
 // saisir de variable
 $plusgrand = -INF;
 $poss = 0;
 // traitement
 for ($i=0; $i < 20; $i++) { 
    $nbre = readline ("entrez un nombre");
    if  ($plusgrand < $nbre) {
        $plusgrand = $nbre;
        $poss = $i + 1;
    }
   
 }
 
 echo " le nombre le plus grand : " .$plusgrand;
 echo " le nombre etait en position: " .$poss

?>