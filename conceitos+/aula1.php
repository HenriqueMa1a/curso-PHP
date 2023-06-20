<?php
// array

$idadeList = [19, 20, 35, 66, 28];

$umaIdade = $idadeList[0];

// echo $umaIdade;

// exibir todas

for ($i=0; $i < count($idadeList) ; $i++) { 
    echo $idadeList[$i] . PHP_EOL;
}

// ou

// foreach ($idadeList as $idade) {
//     echo $idade . PHP_EOL;
// }