<?php

include_once 'Vehicule.class.php';

class Camion extends Vehicule {
    public function demarrer(): string {
        return "Le camion démarre.";
    }

    public function accelerer(): string {
        return "Le camion accélère.";
    }

    public function __toString(): string {
        return "Camion - " . parent::__toString();
    }
}


?>