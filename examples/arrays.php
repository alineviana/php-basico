<?php

$idadeList = [19, 21, 23, 25, 27, 29];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idades) {
    echo $idades . PHP_EOL;
}

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

// Arrays associativos: uma espécie de mapa na qual podemos associar um nome/índice a determinado valor.
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => '1000'
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ],
    12345678912 => [
        'titular' => 'Alberto',
        'saldo' => '300'
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo  $conta['titular'] . PHP_EOL;
}