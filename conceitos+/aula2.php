<?php
// contas correntes

$conta1 = [
    'titular' => 'Henrique Maia',
    'saldo' => 10000
];
$conta2 = [
    'titular' => 'Carolline Gomes',
    'saldo' => 1000
];
$conta3 = [
    'titular' => 'Elaine Maia',
    'saldo' => 100
];


$contasCorrentes = [$conta1, $conta2, $conta3];

foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}