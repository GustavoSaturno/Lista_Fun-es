<?php

function maior ($n1, $n2){

if ($n1 > $n2) {

        print "Maior Número: $n1  \n";

    } 
    
elseif ($n2 > $n1) {

        print "Maior Número: $n2 \n";

    } 
    
else{

        print "Os números são iguais.  \n";
        
    }
}

print "Digite o primeiro número: \n";
$n1 = (float) fgets (STDIN);

print "Digite o segundo número: \n";
$n2 = (float) fgets (STDIN);

$n1 = maior ($n1, $n2);