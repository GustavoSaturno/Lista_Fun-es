<?php

function hipotenusa ($cateto_O, $cateto_A){

    $z = sqrt (($cateto_A**2) + ($cateto_O**2) );
    
    return $z;
}

print " \n Digite o Cateto Oposto: ";
$y = (float) fgets (STDIN);

print " \n Digite o Cateto Adjacente: ";
$x = (float) fgets (STDIN);

$hipotenusa = hipotenusa ($y , $x);

print " \n Hipotenusa: $h \n \n";