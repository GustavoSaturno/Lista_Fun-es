<?php
function dia ($numero){
    if ($numero < 1 or $numero > 7){
        print "O número digitado deve ser entre 1 e 7 \n ";
    }
    
    else  { 
        switch ($numero) {           // Caso
            case 1:
            echo "Domingo \n ";
            break;             //parar código
            
            case 2:
            echo "Segunda \n ";
            break;
            
            case 3:
            echo "Terça \n ";
            break;
            
            case 4:
            echo "Quarta \n";
            break;
            
            case 5:
            echo "Quinta \n ";
            break;
            
            case 6:
            echo "Sexta \n ";
            break;
            
            case 7:
            echo "Sábado \n ";
            break;
        }
    }
}
print "Digite um número correspondente a um dia da semana \n";
$numero = (int) fgets (STDIN);

$numero = dia ($numero);