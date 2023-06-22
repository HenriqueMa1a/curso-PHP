<?php

function sacar( array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem('Você não tem fundos suficientes');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}
function exibeMensagem(string $mensagem)
{
    echo $mensagem .'<br>';
}
function depositar(array $conta, float $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    }else{
        exibeMensagem('Depósitos precisam ser positivos');
    }

    return $conta;
}
function titularComLetrasMaisc(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
function exibeConta( array $conta)
{
    echo $conta;
}