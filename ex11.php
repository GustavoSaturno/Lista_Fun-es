<?php

function cm ($medida){

    $medida = $medida * 2.54;
    return $medida;

}

print "\n Digite a medida em polegadas: ";
$medida = (float) fgets(STDIN);

$medida = cm ($medida);

print "A medida em cm é: $medida \n \n";