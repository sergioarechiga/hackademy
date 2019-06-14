<?php

$a = 999;
$b = 999;
$fin = 0;

$s_a = 0;
$s_b = 0;
$solucion = 0;

print "Find the largest palindrome made from the product of two 3-digit numbers.<br>";


for ($a=100;$a<1000;$a++) {
    for ($b=100;$b<1000;$b++){
        $derecho =$a * $b;  //multiplicacion y cadena al derecho
        $ohcered = strrev($derecho);  //inversa

        if ( $derecho == $ohcered ) {

            if ( $derecho > $solucion ){
                $s_a = $a;
                $s_b = $b;
                $solucion = $derecho;
            }

//            print "$a x $b = $derecho<br>";
//            $fin = 1;
        }

    }

}
print "$s_a x $s_b = $solucion<br>";