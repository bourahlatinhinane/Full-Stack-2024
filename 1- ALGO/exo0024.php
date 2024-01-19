<?php
/* exo 24
les habitants de paris paeint l'impôt selon les régles suivantes :
-les hommes de plus de 20 ans paeint l'impôt
-les femmes paient l'impôt si elles ont entre 18 et 35 ans 
-les autres ne paient pas l'impôt
le programme demandera donc l'àge et le sexe di parisien, et se prononcera donc ensuite sur le fait que l'habitant est imposable 

la reponse: 

Variable sex 
Variable age 
variable a1 et a2
Début
 afficher "Entrez le sexe (H/F) : "
 
 afficher "Entrez l’âge: "
 a1 <- sex = "H" ET age > 20
 a2 <- sex = "F" et (age > 18 et age < 35)
 Si a1 ou a2 Alors
   afficher "vous êtes imposable"
 Sinon
   afficher "vous n'êtes pas imposable"

Fin
*/
//variable

// entrer le sexe
$sex = readline ("entrer votre sexe : ");
$age = readline ("entrer votre âge : ");
 
$cond1 = $sex == "F" and ($age >= 18 and $age <= 35);
$cond2 = $sex == "M" and $age >= 20;
//Femme imposable
 if ($cond1 || $cond2 ) {
     echo "get tax F/M";
 }else {
    echo "no tax";
 }
  
?>
