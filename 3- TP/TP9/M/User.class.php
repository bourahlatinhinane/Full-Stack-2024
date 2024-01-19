<?php
class User
{
    private $id_user;
    private $name_user;
    private $firstname_user;
    private $tel;
    private $mail;
    private $password;
    private string $adresse;
    private string $codepostal;
    private string $ville;

    public function __construct($name_user, $firstname_user, $tel, $mail, $password, string $adresse, string $codepostal, string $ville )
    {
        $this->name_user = $name_user;
        $this->firstname_user = $firstname_user;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
    }

    // ... autres méthodes et getters

    public function getNameUser(): string
    {
        return $this->name_user;
    }

    public function getFirstnameUser(): string
    {
        return $this->firstname_user;
    }

    public function getTelUser(): string
    {
        return $this->tel;
    }

    public function getMailUser(): string
    {
        return $this->mail;
    }

    public function getPasswordUser(): string
    {
        return $this->password;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of codepostal
     */ 
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set the value of codepostal
     *
     * @return  self
     */ 
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
}
?>
