<?php

// tabuada

for ($numero = 1; $numero<=10; $numero ++){
    for($fatorMultiplicativo = 1; $fatorMultiplicativo<=10; $fatorMultiplicativo++){
        $resultado = $numero * $fatorMultiplicativo;
        echo "$numero x $fatorMultiplicativo: $resultado" . PHP_EOL; 
    }
}