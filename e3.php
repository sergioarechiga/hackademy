<?php

$num = 2;
$cont = 1;

while ( $cont <= 10001 ) {

    if ( num_prim($num) ) {
        $cont++;
    }
    $num++;

}

print "Numero primo 10,001 -> ".($num-1);


function num_prim ( $num ) {
    $mitad = round($num / 2,0,PHP_ROUND_HALF_DOWN );
    $primo = 1;

    for ( $j=2;$j<=$mitad;$j++) {

        if ( !fmod($num,$j)) {
            $primo = 0;
            return $primo;
        }

    }

    return $primo;
}