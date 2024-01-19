<?php

include 'Profil.class.php';
include 'Utilisateur.class.php';

$profils = [
    $profil1 = new Profil('CP', 'Chef de projet'),
    $profil2 = new Profil('MN', 'Manager'),
    $profil3 = new Profil('DP', 'Directeur de projet'),
    $profil4 = new Profil('DRH', 'Directeur des ressources humaines'),
    $profil5 = new Profil('DG', 'Directeur général'),
];

// Création des utilisateurs
$utilisateurs = [
    $utilisateur1 = new Utilisateur("tina", "dujiyk", "Commercial", "bourahla", "tina", "tina.brhl@gmail.fr", "034567", 6000, $profil2),
    $utilisateur2 = new Utilisateur("yacine", "rtjytk", "Info", "ham", "yacine", "yacine.hmd@outlook.fr", "0925489565", 7000, $profil5),
    $utilisateur3 = new Utilisateur("maria", "egdhjgff", "Recherche", "yawadio", "lorena", "yawadio.lorena@yahoo.fr", "345654", 5000, $profil3),
    $utilisateur4 = new Utilisateur("ibtissem", "hdfhgjf", "commercial", "aya", "saad", "aya.saad@gmail.com", "09879678", 6000, $profil2),
    $utilisateur5 = new Utilisateur("efflamc", "hgjgfjfgj", "info", "Connan", "Efflam", "efflam.connan@gmail.fr", "087654", 5000, $profil4),
    $utilisateur6 = new Utilisateur("aghiles", "fdjhkhkj", "Commercial", "Bourahla", "aghiles", "aghiles.Aghi@gmail.com", "456776543", 6000, $profil2),
];

echo "La liste des utilisateurs : " . "\n";
foreach ($utilisateurs as $utilisateur) {
    echo  "\n";
    echo "Utilisateur: " . "\n";
    echo $utilisateur->afficher();
    echo "Salaire après augmentation : " . $utilisateur->calculerSalaire() . "\n";
}

echo "\n";
echo "La liste des managers : " . "\n";
foreach ($utilisateurs as $utilisateur) {
    if ($utilisateur->getProfil()->getLibelle() == "Manager") {
        echo "\n";
        echo "Manager: " . "\n";
        echo $utilisateur->afficher() . "\n";
    }
}
?>