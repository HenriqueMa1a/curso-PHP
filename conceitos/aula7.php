<?php
// Desafio com diferentes implementações

$i = 1;

while ($i <= 15 ) {
    echo "$i - Nome" . PHP_EOL;
    $i++;
}
for ($contador = 1; $contador <= 15; $contador++){
    if($contador ==13){
        continue;
    }
    echo "$contador - Sobrenome" . PHP_EOL;
}