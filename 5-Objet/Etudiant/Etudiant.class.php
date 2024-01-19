<?php

include "Filiere.class.php";
class Etudiant {
    // Variable statique pour l'auto-incrémentation de l'identifiant
    public static $cpt = 0;

    // Propriétés de la classe
    private $id;
    private $nom;
    private $prenom;
    private DateTime $dateNaissance; 
    private Filiere $filiere; // Utilisation du type Filiere pour la propriété filiere

    // Constructeur de la classe
    public function __construct($nom, $prenom, DateTime $dateNaissance, Filiere $filiere) {
        $this->id = self::$cpt++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->filiere = $filiere;
    }

    //obtenir ID de l'etudiant
    public function getId() {
        return $this->id;
    }
    //obtenir Nom de l'etudiant
    public function getNom() {
        return $this->nom;
    }
    //obtenir le prenom de l'etudiant
    public function getPrenom() {
        return $this->prenom;
    }

    //obtenir la date de naissanse de l'etudiant
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    //obtenir la filiere de l'etudiant
    public function getFiliere() {
        return $this->filiere;
    }
    //definir la filiere del'etudiant 
    public function setFiliere(Filiere $filiere) {
        $this->filiere = $filiere;
    }

    // Méthode magique pour afficher l'étudiant sous forme de chaîne de caractères
    public function __toString() {
        return "Je suis l'étudiant " . $this->nom . " " . $this->prenom . ", ma date de naissance est : " . $this->dateNaissance->format('Y/m/d');
    }
}


?>
