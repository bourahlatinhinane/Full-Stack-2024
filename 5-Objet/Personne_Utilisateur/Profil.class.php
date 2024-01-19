<?php

class Profil {
    private static int $cpt = 1;
    private int $id;
    private string $code;
    private string $libelle;

    public function __construct(string $code, string $libelle) {
        $this->id = self::$cpt++;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    public function afficher(): string {
        return "ID: {$this->id}, Code: {$this->code}, Libellé: {$this->libelle}\n";
    }

    public function getCode(): string {
        return $this->code;
    }

    public function getLibelle(): string {
        return $this->libelle;
    }
}

?>