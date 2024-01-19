<?php

include_once 'Personne.class.php';

class Developpeur extends Personne {
    private string $_specialiste;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $specialiste) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_specialiste = $specialiste;
    }

    public function calculerSalaire(): float {
        // Augmentation de 20% pour les développeurs
        return $this->salaire * 1.2; 
    }

    public function afficher(): string {
        return "Le salaire du développeur {$this->nom} {$this->prenom} est : {$this->calculerSalaire()} €, sa spécialité : {$this->_specialiste}\n";
    }

    /**
     * Get the value of _specialiste
     */ 
    public function get_specialiste()
    {
        return $this->_specialiste;
    }

    /**
     * Set the value of _specialiste
     *
     * @return  self
     */ 
    public function set_specialiste($_specialiste)
    {
        $this->_specialiste = $_specialiste;

        return $this;
    }
}

?>