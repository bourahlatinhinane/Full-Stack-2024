<?php
/*Exercice 7  
    On dispose de trois variables a, b, a. Ecrivez un algorithme transférant à b la valeur de a, à c la valeur de b et à a la valeur de c.
    
    algo permutation
    Var A, B, C, D : Entier 
        début 
            //saisi de var...
            a ← 2;
            b ← 4;
            c ← 6;
 
            //permutation
            d ← b;
            b ← a;
            a ← c;
            c ← d;
            
            // affichage
            afficher(a);
            afficher(b);
            afficher(b);
        Fin
 
     a=2 b=? c=? d=?
     a=2 b=4 c=? d=?
     a=2 b=4 c=6 d=?
     a=2 b=4 c=6 d=4
     a=2 b=2 c=6 d=4
     a=6 b=2 c=6 d=4
     a=6 b=2 c=4 d=4
 */
     //saisie de variable 
     $a = 22;
     $b = 33;
     $c = 44;

     // permutation
     $d = $b;
     $b = $a;
     $a = $c;
     $c = $d;
     
     //affichage 
 
     echo "A= ".$a;
     echo PHP_EOL;
     echo "b= ".$b;
     echo PHP_EOL;
     echo "c= ".$c;
?>