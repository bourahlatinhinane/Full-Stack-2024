<?php


class Filiere {
    // Variable statique pour l'auto-incrémentation de l'identifiant
    public static $cpt = 0;

    // Propriétés de la classe
    private $id;
    private $code;     
    private $libelle;

    // Constructeur de la classe
    public function __construct($code, $libelle) {
        $this->id = self::$cpt++;
        $this->code=$code;
        $this->libelle = $libelle;
    }

    //obtenir id de la filiere
    public function getId() {
        return $this->id;
    }
    //obtenir code de la filiere
    public function getCode() {
        return $this->code;
    }
    //obtenir libelle de la filiere
    public function getLibelle() {
        return $this->libelle;
    }

    // Méthode magique pour afficher la filière sous forme de chaîne de caractères
    public function __toString() {
        return "Filière : " . $this->libelle;
    }
}
?>