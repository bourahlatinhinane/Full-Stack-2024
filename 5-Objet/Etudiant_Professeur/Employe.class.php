<?php
include_once "Personne.class.php";

class Employe extends Personne {
    private $salaire;

    public function __construct($id, $nom, $prenom, $salaire) {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    public function toString() {
        return parent::toString() . " mon salaire est: {$this->salaire} €";
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
}
