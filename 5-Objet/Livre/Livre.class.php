<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private float $prix;

    public function __construct(string $titre, string $auteur, float $prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre(): void
    {
        $this->titre = $titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(): void
    {
        $this->auteur = $auteur;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function afficher(): void
    {
        echo "le Titre est : " . $this->titre . "\n";
        echo "L'auteur est : " . $this->auteur . "\n";
        echo "Prix est : " . $this->prix . "\n";
    }
}


?>