<?php

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }



    /**
     * Get the value of abcisse
     */ 
    public function getx()
    {
        return $this->x;
    }

    /**
     * Set the value of abcisse
     *
     * @return  self
     */ 
    public function setx($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of ordonnee
     */ 
    public function gety()
    {
        return $this->y;
    }

    /**
     * Set the value of ordonnee
     *
     * @return  self
     */ 
    public function sety($y)
    {
        $this->y= $y;

        return $this;
    }
    public function afficher() {
        echo "Point({$this->x},{$this->y})\n";
    }
    


}