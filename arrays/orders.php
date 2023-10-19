<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinícius',
        'nota' => 8,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 6,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];  //ordem crescente
}

usort(array: $notas, callback:'ordenaNotas');
var_dump($notas);