<?php

include 'Personne.class.php';
class Utilisateur extends Personne {
    private string $login;
    private string $password;
    private string $service;
    private Profil $profil;

    public function __construct(string $nom, string $prenom, string $service, string $login, string $password, string $mail, string $telephone, float $salaire, Profil $profil) {
        parent::__construct($nom, $prenom, $service, $login, $password, $mail, $telephone, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    public function calculerSalaire(): float {
        $salaire = parent::calculerSalaire();

        // Augmentation de salaire pour les managers et directeurs généraux
        if ($this->profil->getCode() === 'MN') {
            $salaire *= 1.1; // Manager : +10%
        } elseif ($this->profil->getCode() === 'DG') {
            $salaire *= 1.4; // Directeur général : +40%
        }

        return $salaire;
    }

    public function afficher(): string {
        return parent::afficher() . "Mon Login: {$this->login}, Mon Service: {$this->service}, MonProfil: {$this->profil->getCode()}\n";
    }

    public function getProfil(): Profil {
        return $this->profil;
    }
}

?>