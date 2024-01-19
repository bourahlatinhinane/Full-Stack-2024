<?php
class Client
{
    private $CIN;
    private $Nom;
    private $Prenom;
    private $Tel;

    public function __construct(string $CIN, string $Nom, string $Prenom, string $Tel)
    {
        $this->CIN = $CIN;
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Tel = $Tel;
    }

    // Propriétés pour les méthodes d'accès
    public function getCIN():string
    {
        return $this->CIN;
    }

    public function getNom():string
    {
        return $this->Nom;
    }

    public function getPrenom():string
    {
        return $this->Prenom;
    }

    public function getTel() :string
    {
        return $this->Tel;
    }

    public function afficher() : void
    {
        echo "CIN: " . $this->CIN . "\n";
        echo "NOM: " . $this->Nom . "\n";
        echo "Prénom: " . $this->Prenom . "\n";
        echo "Tél : " . $this->Tel . "\n";
    }
}

