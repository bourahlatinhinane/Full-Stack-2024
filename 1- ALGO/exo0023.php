<?php
/* exo 23 
Réécrire l’algorithme précédent, mais cette fois-ci on ne connaît pas d’avance combien l’utilisateur souhaite saisir de nombres. 
La saisie des nombres s’arrête lorsque l’utilisateur entre un zéro.

Variables N, i, plus grand, poss en Entier
Debut
 nbre ← 1
 i ← 0
 plus grand ← 0
 TantQue nbre <> 0
   nbre  "Entrez un nombre : "
   
   i ← i + 1
   Si i = 1 ou nbre > plusgrand Alors
     plus grand ← nbre
     poss ← i
  

 Ecrire "Le nombre le plus grand était : ", plusgrand
 Ecrire "Il a été saisi en position numéro ", poss
Fin
*/

// saisie de variable
  $nbre = -INF;
  $i = 0;
  $plusgrand = 0;
  $poss = 0;

  // traitement
  while ($nbre < 0 or $nbre > 0 ) {
    $nbre = readline ("entrez un nombre: ");
    $i++;
    
   if ($plusgrand < $nbre ) {
       $plusgrand = $nbre;
      $poss = $i;
    }
 }
 echo "le nombre le plus grand est : ".$plusgrand;
 echo "et sa position est : ".$poss;


?>