<?php


function graus ($temperatura) {

    $temperatura = ($temperatura - 32) * 5/9;
    
    return $temperatura;
}

print "Qual a temperatura em Fahrenheit? \n";

    $fahrenheit = (float) fgets(STDIN);

    $celcius = graus($f);

print " \n A temperatura em graus celcius é: $celcius \n \n ";