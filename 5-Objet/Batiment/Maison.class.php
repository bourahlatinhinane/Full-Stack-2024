<?php
include "Batiment.class.php";


class Maison extends Batiment {
    // Propriété privée
    private $nbPieces;

    public function __construct($adresse, $superficie, $nbPieces) {
        parent::__construct($adresse, $superficie);
        $this->nbPieces = $nbPieces;
    }

    public function getNbPieces() {
        return $this->nbPieces;
    }

    public function setNbPieces($nbPieces) {
        $this->nbPieces = $nbPieces;
    }

    public function __toString() {
        return parent::__toString() . " \n  le nombre de pièces : {$this->nbPieces}";
    }
}
