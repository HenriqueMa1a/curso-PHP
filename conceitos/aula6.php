<?php

$idade = 15;
$acompanhado = true;
echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos, acompanhado por maior de idade" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
} else if ($idade >= 16 && $acompanhado == true) {
    echo "Você tem $idade anos e está acompanhado. Pode entrar " . PHP_EOL;

} else {
    echo "Você só tem $idade anos. Não Pode entrar " . PHP_EOL;
    echo "É uma pena" . PHP_EOL;    
}

echo "Adeus";