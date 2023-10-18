<?php

$idade = 15;
$numeroDePessoas = 2;

if ($idade == 18 or $idade > 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar!";
} else {
    echo "Você só tem $idade anos. Você não pode entrar!" . PHP_EOL;
}

echo PHP_EOL;

echo "Adeus!";

echo PHP_EOL;

// $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso; (Operador Ternário)

$mensagem = $idade <= 18 ? 'Você é menor de idade!' : 'Você é maior de idade!';
echo $mensagem;