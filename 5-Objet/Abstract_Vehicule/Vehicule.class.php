<?php

abstract class Vehicule {
    private static int $counter = 1;
    protected int $matricule;
    protected int $anneeModele;
    protected float $prix;

    public function __construct(int $anneeModele, float $prix) {
        $this->matricule = self::$counter++;
        $this->anneeModele = $anneeModele;
        $this->prix = $prix;
    }

    abstract public function demarrer(): string;

    abstract public function accelerer(): string;

    public function __toString(): string {
        return "Matricule: {$this->matricule}, Année du modèle: {$this->anneeModele}, Prix: {$this->prix} €";
    }
}


?>