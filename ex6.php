<?php


function soma ($n1, $n2) {

    $n3 = $n1;
    $n1 = 0;

while ($n3 <= $n2) {

    $n1 = $n1 + $n3 ;
    $n3 = $n3 + 1;

        }

    return $n1;

}

print " \n Digite o 1° número: ";
$n1 = (int) fgets (STDIN);
    
print " \n Digite o 2° número: ";
$n2 = (int) fgets (STDIN);

$soma = soma($n1, $n2);


print " O resultado da soma é: $soma \n ";