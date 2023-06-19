<?php

// números ímpares

for ($i=1; $i < 100 ; $i+=2) { 
    echo $i . PHP_EOL;
}

//ou 
$contador = 1;
while ($contador<100) {
    if($contador % 2 == 1){
        echo $contador . PHP_EOL;
    }
}