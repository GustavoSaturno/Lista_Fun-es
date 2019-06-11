<?php

function perimetro ($lados, $tamanho) {

$perimetro = $lados * $tamanho;
return $perimetro;

}


print " \n Digite a quantidade de lados: ";
$lados = (int) fgets (STDIN);

print " \n Digite a medida de um dos lados: ";
$tamanho = (int) fgets (STDIN);


$perimetro = perimetro ($lados, $tamanho); 

if ($lados == 3) {

        print " \n O perímetro do triângulo é: $perimetro \n \n ";
        
    } 

elseif ($lados == 4) {

        print " \n O perímetro do quadrado é: $perimetro \n \n ";
        
        } 

elseif ($lados == 5) {

        print " \n O perímetro do pentágono é: $perimetro \n \n ";
        
        } 

else {

        print " \n Erro! Por Favor digite os dados novamente! \n \n ";
       
        }