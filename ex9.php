<?php

function divisivel($a, $b){

    if ($a % $b == 0) {

        return 1 ;

    } 

else{

        return 0 ;

    }
}

print "Digite o número a ser dividido: \n";
$a = (int) fgets (STDIN);

print "Digite o Divisor: \n";
$b = (int) fgets (STDIN);

$resultado = divisivel($a, $b);

print "$resultado\n";