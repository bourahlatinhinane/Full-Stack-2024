<?php
include 'Client.class.php';

class Compte
{
    private int $numeroCompte;
    private float $solde;
    private Client $proprietaire;
    private static int $nombreComptes = 0;
    

    public function __construct(Client $proprietaire)
    {
        $this->numeroCompte = ++self::$nombreComptes;
        $this->solde = 0;
        $this->proprietaire = $proprietaire;
    }

    public function getNumeroCompte(): int
    {
        return $this->numeroCompte;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function crediter(float $montant): void
    {
        $this->solde += $montant;
    }

    public function crediterCpt(float $montant, Compte $compte): void
    {
        $this->crediter($montant);
        $compte->debiter($montant);
    }

    public function debiter(float $montant): void
    {
        $this->solde -= $montant;
    }

    public function debiterCpt(float $montant, Compte $compte): void
    {
        $this->debiter($montant);
        $compte->crediter($montant);
    }

    public function afficherResume(): void
    {
        echo "Numéro de Compte: " . $this->numeroCompte . "\n";
        echo "Solde de compte: " . $this->solde . "\n";
        echo "Propriétaire du compte :\n";
        $this->proprietaire->afficher();
        
    }

    public static function getNombreComptes(): int
    {
        return self::$nombreComptes;
    }
}