<?php

$a = 999;
$b = 999;
$fin = 0;

print "Find the largest palindrome made from the product of two 3-digit numbers.<br>";

while ( !$fin ){

    $derecho =$a * $b;  //multiplicacion y cadena al derecho
    $ohcered = strrev($derecho);  //inversa

    if ( $derecho == $ohcered ){
        print "$a x $b = $derecho<br>";
        $fin = 1;
    }

    if ( $a == 100 ) {
        $a = 999;
        $b--;
    } else {
        $a--;
    }

}
