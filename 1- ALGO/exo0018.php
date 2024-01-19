<?php
/* exo 18
Variable age en entier 

début 
    //saisie de variable
      age < "entrez l'age de l'enfant: ";

    //affichage

    si (age>=12)
      afficher "catégorie cadet";
    sinon si (age>=10)
      afficher "catégorie minime";
    sinon si (age>=8)
      afficher "catégorie pupille";
    sinon si (age>=6)
      afficher "catégorie poussin";
fin        

*/

  //saisie de variable
    $age = readline( "entrez l'age de l'enfant");

  //affichage 
      if ( $age >=12 ){
         echo "catégorie cadet";
      }
      elseif ( $age >= 10){
         echo "catégorie minime";
      }
      elseif ( $age >= 8){
         echo "catégorie pupille";
      }
      elseif ( $age >= 6){
         echo "catégorie poussin";
      }

  








?>
 