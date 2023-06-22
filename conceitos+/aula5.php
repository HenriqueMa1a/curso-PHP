<?php

$idades = [10, 20 , 30, 40];
list($idade1, $idade2, $idade3) = $idades; // mais novo -> [$idade1, $idade2, $idade3] = $idades

echo "$idade1, $idade2, $idade3" . PHP_EOL;
// e se pegássemos um array em que não é automaticamente indexado?
$contasCorrentes = [
    '12345678910' => [
        'titular' => 'Henrique Maia',
        'saldo' => 10000
    ],
    '12345678911' => [
        'titular' => 'Carolline Gomes',
        'saldo' => 1000
    ],
    '12345678912' => [
        'titular' => 'Elaine Maia',
        'saldo' => 100
    ]
];

['titular' => $titular, 'saldo' => $saldo] = $contasCorrentes['12345678910'];

echo "$titular, $saldo" . PHP_EOL;
