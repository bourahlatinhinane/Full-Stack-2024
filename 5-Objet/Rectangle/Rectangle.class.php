<?php

class Rectangle
{
    // Attributs 
    private float $long;
    private float $larg;

    // Constructeur d'initialisation
    public function __construct(float $long, float $larg)
    {
        $this->long = $long;
        $this->larg = $larg;
    }

    // Propriétés get et set
    public function getLongueur(): float
    {
        $long =  $this->long;
        return $long;
    }

    public function setLongueur(float $longueur): void
    {
        $this->long = $long;
    }

    // Propriétés get et set 
    public function getLargeur(): float
    {
        $larg = $this->larg;
        return $larg;
    }

    public function setLargeur(float $larg): void
    {
        $this->larg = $larg;
    }

    // calculer le périmètre du rectangle
    public function perimetre(): float
    {
        $perimetre = ($this->long + $this->larg) * 2 ;
        return $perimetre;
    }

    // calculer l'aire du rectangle
    public function aire(): float
    {
        $aire = $this->long * $this->larg;
        return $aire;
    }

    //vérifier si le rectangle est un carré
    public function estCarre(): bool
    { if ($this->long == $this->larg) {
        return true;
    }else {
        return false;
    }
        
    }
      
    // afficher les caractéristiques du rectangle
    public function afficherRectangle(): void
    {
        echo "Longueur : " . $this->long . " - Largeur : " . $this->larg . " - Périmètre : " . $this->perimetre() . " - Aire : " . $this->aire() . "  ";
        if ($this->estCarre()) {
            echo "Il s'agit d'un carré\n";
        } else {
            echo "Il ne s'agit pas d'un carré\n";
        }
        
    }      
}

?>