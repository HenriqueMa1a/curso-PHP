<?php
require 'aula4Funcoes.php'; 
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
titularComLetrasMaisc($contasCorrentes['12345678910']);
$contasCorrentes['12345678910'] = sacar($contasCorrentes['12345678910'], 5000);
$contasCorrentes['12345678912'] = depositar($contasCorrentes['12345678912'], 350);
unset($contasCorrentes['12345678911']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>        
        <dt>
            <h3>
            <?= $conta['titular'];?> - <?=$cpf;?>
            </h3>
        </dt>
        <dt>
           <?= $conta['saldo'];?>
        </dt>
        <?php } ?>
    </dl>
</body>
</html>