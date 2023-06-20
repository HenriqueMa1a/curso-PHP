<?php
//Função

function sacar($conta, $valorASacar) 
{
    if( $valorASacar > $conta['saldo']){
        exibeMensagem('Você não tem fundos suficientes');
    }else{
        $conta['saldo']-= $valorASacar;
    }
    return $conta;
}
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '12345678910'=> [
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

$contasCorrentes['12345678910'] = sacar($contasCorrentes['12345678910'], 5000);

foreach ($contasCorrentes as $key => $conta) {
    echo $key. ': ' . $conta['titular'] . PHP_EOL;
}