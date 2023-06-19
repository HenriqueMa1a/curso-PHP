<?php

// cálculo do imc

$peso = 85;
$altura = 1.8;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5)
    echo "Você está abaixo peso" . PHP_EOL;
else if ($imc >= 18.5 && $imc <= 24.9)
    echo "Você está com o pesso normal" . PHP_EOL;
else if ($imc >= 25 && $imc <= 29.9)
    echo "Você está sobrepeso" . PHP_EOL;
else
    echo "Você está Obeso" . PHP_EOL;