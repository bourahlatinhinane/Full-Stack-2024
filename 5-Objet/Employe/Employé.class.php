<?php

class Employe
{
    private string $matricule;
    private string $nom;
    private string $prénom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;

//conctruct 

    public function __construct (string $matricule, string $nom, string $prénom, string $dateNaissance, string $dateEmbauche, float $salaire){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prénom = $prénom;
        $this->dateNaissance= $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }

    //méthodes D'accés

    public function getMatricule () :string
    {
        return $this->matricule;
    }
 /**
     * Set the value of matricule
     *
     * @return  self
     */ 

    public function getNom():string
    {
        return $this->nom;
    }
     /**
     * Set the value of Nom
     *
     * @return  self
     */ 

    public function getPrenom():string
    {
        return $this->prénom;
    }
     /**
     * Set the value of Prenom
     *
     * @return  self
     */ 

    public function getDateNaissance():string
    {
        return $this->dateNaissance;
    }
     /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 

    public function getDateEmbauche():string
    {
        return $this->dateEmbauche;
    }

     /**
     * Set the value of DateEmbauche
     *
     * @return  self
     */ 

    public function getSalaire():float
    {
        return $this->salaire;
    }

     /**
     * Set the value of Salaire
     *
     * @return  self
     */ 
      
     // Méthode pour calculer l'âge de l'employé
     public function age() : int
     {
         $dateNaissance = new DateTime($this->dateNaissance);
         $dateActuelle = new DateTime();
 
         $difference = $dateActuelle->diff($dateNaissance);
 
         return $difference->y;
     }
 
     // Méthode pour calculer l'ancienneté de l'employé
     public function anciennete() : int
     {
         $dateEmbauche = new DateTime($this->dateEmbauche);
         $dateActuelle = new DateTime();
 
         $difference = $dateActuelle->diff($dateEmbauche);
 
         return $difference->y;
     }
 
     // Méthode pour augmenter le salaire en fonction de l'ancienneté
     public function augmentationDuSalaire(): float
    {
        $anciennete = $this->anciennete();
          $this->salaire;

        if ($anciennete < 5) {
            $this->salaire *= 1.02; 
        } elseif ($anciennete < 10) {
            $this->salaire *= 1.05; 
        } else {
            $this->salaire *= 1.1;
        }

        return $this->salaire;
    }

 
     // Méthode pour afficher les informations de l'employé
     public function afficherEmploye(): void
     {
         echo "Matricule : " . $this->getMatricule() . "\n";
         echo "Nom Complet : " . $this->getNom() . " " . $this->getPrenom() ."\n";
         echo "Age : " . $this->age() ."\n";
         echo "Ancienneté : " . $this->anciennete() . " ans" . "\n";
         echo "Salaire : " . $this->salaire . "\n";
     }
 }