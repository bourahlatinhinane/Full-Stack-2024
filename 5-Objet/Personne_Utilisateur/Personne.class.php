<?php
class Personne {
    protected static int $cpt = 1;
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;

    public function __construct(string $nom, string $prenom, string $service, string $login, string $password, string $mail, string $telephone, float $salaire) {
        $this->id = self::$cpt++;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    public function calculerSalaire(): float {
        return $this->salaire;
    }

    public function afficher(): string {
        return "ID: {$this->id}, Nom: {$this->nom}, Prénom: {$this->prenom}, Mail: {$this->mail}, Téléphone: {$this->telephone}, Salaire: {$this->salaire}\n";
    }
}

?>