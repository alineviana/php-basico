<?php

$alunos2021 = [
    'Vinícius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patrícia',
    'Nico',
    'Mila',
    'Daiane',
    'Rodrigo',
];


$alunos2022 = [...$alunos2021, 'Aline', ...$novosAlunos];
array_push($alunos2022, 'Bruno'); // add elementos

var_dump($alunos2022);