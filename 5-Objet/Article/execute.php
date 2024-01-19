<?php
include "Article.class.php";
// Article::$tauxTVA = 20;


$reference = readline ("Donner la référence: ");
$designation = readline ("Donner la désignation: ");
$prixHT = readline ("Donner le prix HT: ");

$article1 = new Article ($reference, $designation, $prixHT );
$article1 -> afficherArticle();
echo "\n";

$reference = readline ("Donner la référence: ");
$designation = readline ("Donner la désignation: ");
$prixHT = readline ("Donner le prix HT: ");

$article2 = new Article ($reference, $designation, $prixHT);
$article2 -> afficherArticle();
echo "\n";

$reference = readline ("Donner la référence: ");
$designation = readline ("Donner la désignation: ");

$article3 = new Article ($reference = "", $designation="");
$article3 -> afficherArticle();
echo "\n";

$reference = readline ("Donner la référence: ");
$designation = readline ("Donner la désignation: ");
$prixHT = readline ("Donner le prix HT: ");

$article4 = new Article ($reference, $designation, $prixHT);
$article4 -> afficherArticle();
echo "\n";
