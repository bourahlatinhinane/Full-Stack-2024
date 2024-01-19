<?php 
include_once "Employe.class.php";

class Professeur extends Employe {
    private $specialite;

    public function __construct($id, $nom, $prenom, $salaire, $specialite) {
        parent::__construct($id, $nom, $prenom, $salaire);
        $this->specialite = $specialite;
    }

    public function toString() {
        return parent::toString() . " ma spécialité est: {$this->specialite}";
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}
?>