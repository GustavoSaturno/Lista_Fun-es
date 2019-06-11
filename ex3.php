<?php

function media ($n1, $n2) {

    $media = ($n1 + $n2)/2;

    return $media;
}


print "Digite a 1° nota: \n ";
$n1 = (float) fgets(STDIN);


print "Digite a 2° nota: \n ";
$n2 = (float) fgets(STDIN);

$media = media ($n1, $n2);

if ($media >= 6) {

print "PARAÉNS! você foi aprovado com a média: $media \n";

} 

else { 

    print "REPROVADO, média: $media \n";

}

