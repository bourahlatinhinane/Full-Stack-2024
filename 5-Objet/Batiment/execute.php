<?php

include "Maison.class.php";

// Test 
$batiment = new Batiment("123 Rue de valmy", 200);
$maison = new Maison("45 rue de créme", 150, 3);

echo "Informations sur le bâtiment : " . $batiment . "\n";
echo "Informations sur la maison : " . $maison . "\n";


?>
