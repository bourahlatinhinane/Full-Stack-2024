<?php


class Batiment {
    // Propriétés protégées
    protected $adresse;
    protected $superficie;

    public function __construct($adresse, $superficie) {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getSuperficie() {
        return $this->superficie;
    }

    public function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

  
    public function __toString() {
        return "Adresse : {$this->adresse}, \n  La superficie : {$this->superficie}";
    }
}
