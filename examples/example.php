<?php

// Ímpar
for ($i = 1; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo "Esse número é ímpar: $i" . PHP_EOL;
    }
}

// Tabuada
$multiplicador = 6;

for ($i = 1; $i < 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}

// IMC
$peso = 58;
$altura = 1.71;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18) {
    echo "abaixo";
} else if ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado!";