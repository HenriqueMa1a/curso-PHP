<?php
// adicioandndo conta 


$contasCorrentes = [
    12345678910 => [
        'titular' => 'Henrique Maia',
        'saldo' => 10000
    ],
    12345678911 => [
        'titular' => 'Carolline Gomes',
        'saldo' => 1000
    ],
    12345678912 => [
        'titular' => 'Elaine Maia',
        'saldo' => 100
    ]
];
// toda vez que estivermos num array associativo 

$contasCorrentes[12345678913] = [
    'titular' => 'Maria das Graças',
    'saldo'=> 20000
];

foreach ($contasCorrentes as $key => $conta) {
    echo $key. ': ' . $conta['titular'] . PHP_EOL;
}