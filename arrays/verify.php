<?php

$notas = [
    'Vinícius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort(array: $notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Vinícius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Vinícius']));

echo 'Alguém tirou 6?' . PHP_EOL;
var_dump(in_array(6, $notas));

echo 'Quem tirou 10??' . PHP_EOL;
echo array_search(10, $notas);


// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula