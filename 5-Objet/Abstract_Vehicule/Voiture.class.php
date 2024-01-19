<?php

include_once 'Vehicule.class.php';

class Voiture extends Vehicule {
    public function demarrer(): string {
        return "La voiture démarre.";
    }

    public function accelerer(): string {
        return "La voiture accélère.";
    }

    public function __toString(): string {
        return "Voiture - " . parent::__toString();
    }
}

?>