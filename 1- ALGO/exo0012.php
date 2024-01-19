<?php
/* Excercice 12
Ecrire un programme qui lit le prix HT d’un article, le nombre d’articles et le taux de TVA, 
et qui fournit le prix total TTC correspondant. Faire en sorte 
que des libellés apparaissent clairement.(TTC = NA*HT*(1+TVA))

la reponse :
ALGO TVA
VAR tva, nArticle, prixHt,ttc;
début 

  //saisie de variable
  tva < 0.20;
  nArticle < "entrez le nbre d'article " ;
  prixHT < "entrez le prix HT ";
  TTC < "nArticle*prixHT*(1+TVA)";



//affichage 
 afficher (TTC)


*/
// saisie 
$TVA = 0.20;
$nArticle = readline("entrez le nbre d'article ");
$prixHT= readline("entrez le prix HT");
$TTC = ( $nArticle * $prixHT)*(1 + $TVA);

//affichage 

echo "TTC= " .$TTC;







?>