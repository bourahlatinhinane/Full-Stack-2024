<?php 
/*
Exercice 5 : Créez un tableau multidimensionnel avec des informations sur des employés (nom, salaire, département). 
Utilisez une boucle foreach pour calculer la moyenne des salaires dans chaque département.
*/ 
$employees = array(
    array("nom" => "Alice", "salaire" => 5000, "département" => "Ventes"),
    array("nom" => "Bob", "salaire" => 6000, "département" => "Ventes"),
    array("nom" => "Charlie", "salaire" => 7000, "département" => "RH"),
    array("nom" => "David", "salaire" => 5500, "département" => "RH")
);
$moyVentes = 0;
$moyRH = 0;
$i=0;
$j=0;

foreach ($employees as $value) {
    if ($value ["département"]=="Ventes"){
        $moyVentes += $value ["salaire"];
        $i++;
    }if ($value ["département"]=="RH") {
        $moyRH += $value ["salaire"];
        $j++;
    }
}
$moyVentes = $moyVentes / $i++ ;
$moyRH = $moyRH / $j++ ;
echo "$moyVentes $moyRH \n";

 
?>