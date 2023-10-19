<?php 

$notasBimestre1 = [
    'Vinícius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$alunosFaltantes = array_diff($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

$diferenca = array_diff($array1, $array2, $array3);
var_dump($diferenca);