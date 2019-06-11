<?php

function peso ($sexo, $altura) {

if ($sexo == 1){

    $peso = (62.1 * $h) - 44.7;
    return $peso;

    } 
    
else{

    $peso = (72.7 * $altura) -58;
    return $peso;

    }

}

print "\n Digite seu sexo (1 = Feminino / 2 = Masculino): ";
$sexo = (int) fgets(STDIN);

print "\n Digite a sua altura: ";
$altura = (float) fgets(STDIN);

$peso = peso ($sexo, $altura);

print "\n Seu peso ideal é: $peso \n \n";