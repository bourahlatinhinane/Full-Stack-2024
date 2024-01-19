<?php
/* exo 14
Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur produit est négatif ou positif (on laisse de côté le cas où le produit est nul). 
Attention toutefois : on ne doit pas calculer le produit des deux nombres.
//
nbre1 < "entrer le nombre"
nbre2 < "entrer le nombre"
 

*/
$nbre1= readline ("entrez un nombre: ");
$nbre2= readline ("entrez un nombre: ");

if (($nbre1 < 0 && $nbre2 > 0) ||($nbre1 > 0 && $nbre2 < 0) ){
    echo "leur produit est négatif" ;
}
else{
    
    echo "leur produit positif" ;

}
?>