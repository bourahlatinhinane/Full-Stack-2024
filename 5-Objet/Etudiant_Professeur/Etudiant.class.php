<?php
include_once "Personne.class.php";


class Etudiant extends Personne {
    private $cne;

    public function __construct($id, $nom, $prenom, $cne) {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }

    public function toString() {
        return parent::toString() . " mon CNE est: {$this->cne}";
    }

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}
