<?php

include_once 'Personne.class.php';

class Manager extends Personne {
    private string $_service;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $service) {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->_service = $service;
    }

    public function calculerSalaire(): float {
        // Augmentation de 35% pour les managers
        return $this->salaire * 1.35; 
    }

    public function afficher(): string {
        return "Le salaire du manager {$this->nom} {$this->prenom} est : {$this->calculerSalaire()} €, son service : {$this->_service}\n";
    }

    /**
     * Get the value of _service
     */ 
    public function get_service()
    {
        return $this->_service;
    }

    /**
     * Set the value of _service
     *
     * @return  self
     */ 
    public function set_service($_service)
    {
        $this->_service = $_service;

        return $this;
    }
}

?>