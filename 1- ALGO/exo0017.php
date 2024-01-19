<?php
/*exo17
ALGO nombre produit positif ou négatif incluant 0
VAR nbre1, nbre2 entier;

début
    //saisie de variable
       nbre1 < entrez un nombre;
       nbre2 < entrez un nombre;

    //affichage
    si(nbre1 > 0 et nbre2 > 0)   
        afficher "le nombre est positif";
    sinon si (nbre1 <0 et nbre2 <0)    
        afficher "le nombre est positif";
    sinon si (nbre1 == 0 ou nbre2 ==0)
        afficher "le nombre est nul";
    sinon
        afficher "le nombre est négatif";        
fin 
*/
    // saisie de variables  
       $nbre1 = readline ("entrez un numbre");
       $nbre2 = readline ("entrez un nombre");

    //traitement
       if ($nbre1 > 0 and $nbre2 > 0)  {
           echo "le produit est positif";
       } 
       elseif ($nbre1 < 0 and $nbre2 <0) {
           echo "le produit est positif";
       }
       elseif($nbre1 == 0 or $nbre2 == 0) {
           echo "le produit est nul";
       }
       else{
           echo "le produit est négatif";
       }

       ?>