<?php


//for ($i=7;$i<9;$i++) {
//
//    $tnum = tri_num($i);
//
//    print "<br> $tnum :";
//
//
//    //Divisores
//    $mitad = round($tnum / 2,0,PHP_ROUND_HALF_DOWN );
//
//    for ( $j=2;$j<=$mitad;$j++) {
//
//        if ( !fmod($tnum,$j)) {
//            print "$j,";
//        }
//    }
//    $a=num_div($tnum);
//    print " Cuenta: ".count(num_div($tnum))."a  :";
//    print_r($a);
//
//
//}


$i=7;
//$r=0;
while ( (count($r=num_div(tri_num($i)))) < 500 ) {
//    print "#$i: trim num ".tri_num($i);
//    print "<br>";
    $i++;
}

print "Numero Trim: ".tri_num($i);
//print_r($r);
//print_r($r);

function tri_num ( $num ) {
    return $num*($num+1)/2;
}

function num_div ( $tnum ) {
    //Divisores
    $mitad = round($tnum / 2,0,PHP_ROUND_HALF_DOWN );
    $resultado[] = 1;
    for ( $j=2;$j<=$mitad;$j++) {

        if ( !fmod($tnum,$j)) {
            $resultado[] = $j;
        }

    }
    $resultado[] = $tnum;

    return $resultado;
}