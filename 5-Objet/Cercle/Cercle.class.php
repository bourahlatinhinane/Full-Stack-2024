<?php
include 'Point.class.php';


class Cercle {
    private point $centre;
    private $rayon;

    public function __construct($x, $y, $rayon) {

        $this->centre = new Point($x, $y);
        $this->rayon = $rayon;
    }
    
    public function getPerimetre() {
        return round( M_PI * $this->rayon*2 , 2);
    }

    public function getSurface() {
        return round(M_PI * pow($this->rayon, 2), 2);
    }

    public function appartient($x, $y) {
        $distanceCarree = pow($x - $this->centre->getX(), 2) + pow($y - $this->centre->getY(), 2);
        $rayonCarre = pow($this->rayon, 2);

        if ($distanceCarree <= $rayonCarre) {
            return true;  // Les coordonnées appartiennent au cercle
        } else {
            return false;  // Les coordonnées ne sont pas dans le cercle
        }
    }


    public function afficher() {
        echo "CERCLE({$this->centre->getX()},{$this->centre->getY()},{$this->rayon})\n";
    }
}
?>