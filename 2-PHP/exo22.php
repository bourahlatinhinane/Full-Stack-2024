<?php
/*
Exercice 5 : Créez une fonction nommée "genererMotDePasse" qui génère un mot de passe aléatoire de longueur donnée. Le mot de passe doit contenir des lettres majuscules, des lettres minuscules et des chiffres.
// Exemple d'utilisation :
$resultat = genererMotDePasse(8); // Exemple de mot de passe généré : "aB3x7Kp2"

*/
function genererMotDePasse ($longueur){
    $chaine="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $motdepasse = " ";
    for ($i=0; $i < $longueur ; $i++) { 
        $motdepasse = $chaine[rand(0, strlen($chaine) -1)];
        $motdepasse = substr(str_shuffle(
        "abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789"),1, $longueur);

        return $motdepasse; 
    }
}


$resultat = genererMotDePasse(8);
echo $resultat;

?>