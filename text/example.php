<?php

$nome = "Vinícius Dias";

$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família!" . PHP_EOL;
} else {
    echo "$nome não é da minha família!" . PHP_EOL;
}

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo "É uma URL segura!" . PHP_EOL;
} else {
    echo "Não é uma URL segura!" . PHP_EOL;
}

$email = 'vinicius@alura.com.br';
$posicaoDoArroba = strpos($email, needle: '@');

echo substr($email, offset:0, length: 8) . PHP_EOL;
echo substr($email, offset: 9) . PHP_EOL;