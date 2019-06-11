<?php


function dia ($numero){

if ($numero < 1 or $numero > 12){

    print "O número digitado deve ser entre 1 e 12 \n ";

}
    
else  { 

    switch ($numero) {    

            case 1:
            echo "Janeiro\n ";
            break;  

            case 2:
            echo "Fevereiro \n ";
            break;
            
            case 3:
            echo "Março \n ";
            break;
            
            case 4:
            echo "Abril \n";
            break;
            
            case 5:
            echo "Maio \n ";
            break;
            
            case 6:
            echo "Junho \n ";
            break;
            
            case 7:
            echo "Julho \n ";
            break;

            case 8:
            echo "Agosto \n ";
            break;

            case 9:
            echo "Setembro \n ";
            break;

            case 10:
            echo "Outubro \n ";
            break;

            case 11:
            echo "Novembro \n ";
            break;

            case 12:
            echo "Dezembro \n ";
            break;

        }
    }
}


print "Digite um número correspondente a um mês: ";
$numero = (int) fgets (STDIN);

$numero = dia ($numero);