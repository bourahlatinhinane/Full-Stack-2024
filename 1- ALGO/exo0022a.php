<?php
/*exo 22
ecrire un algorithme qui demande successivement 20 nombre à l'utilisateur,et qui lui dit ensuite quel était
le plus grand parmis ces 20 nombre.

variable N; i; plus grand, en entier

début
 // saisie de variable
 plusgrand <- 0
 // traitement
 i <- 1 à 20
 nbre "entrez un nombre= "
 si i=0 ou n > plusgrand donc 
 plusgrand <- nbre
 afficher " le nombre le plus grand : ",plusgrand
fin

*/
 // saisir de variable
 $plusgrand = 0;
 // traitement
 for ($i=0; $i < 20; $i++) { 
    $nbre = readline ("entrez un nombre");
    if ($i==0) {
        $plusgrand = $nbre;
    }elseif ($plusgrand < $nbre) {
        $plusgrand = $nbre;
    }
   
 }
 echo"" .$plusgrand;


?>