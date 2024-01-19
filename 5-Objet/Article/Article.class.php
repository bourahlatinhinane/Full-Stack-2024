<?php

    class Article {
        // Attribut 
        public static $tauxTVA = 20;
    
        private $reference;
        private $designation;
        private $prixHT;
    
        public function __construct(string $reference ,string  $designation ,float $prixHT = 0) {
            $this->reference = $reference;
            $this->designation = $designation;
            $this->prixHT = $prixHT;
        }
    
        public function getReference() {
            return $this->reference;
        }
    
        public function setReference($reference) {
            $this->reference = $reference;
        }
    
        public function getDesignation() {
            return $this->designation;
        }
    
        public function setDesignation($designation) {
            $this->designation = $designation;
        }
    
        public function getPrixHT() {
            return $this->prixHT;
        }
    
        public function setPrixHT($prixHT) {
            $this->prixHT = $prixHT;
        }
    
        public function calculerPrixTTC() {
            return $this->prixHT + ($this->prixHT * self::$tauxTVA / 100);
        }
    
        public function afficherArticle() {
            echo "Référence: " . $this->reference . PHP_EOL;
            echo "Désignation: " . $this->designation . PHP_EOL;
            echo "Prix HT: " . $this->prixHT . PHP_EOL;
            echo "Le prix TTC est " . $this->calculerPrixTTC() . PHP_EOL;
        }
    }
    
  ?>

    