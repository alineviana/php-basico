<?php 

$idade = 21;

$idadeDaqui10Anos = $idade + 10;

$idadeHa5Anos = $idade - 5;

$texto = "Hello World!";

$verdadeiro = true;

echo $idadeDaqui10Anos; // 31
echo "\n";

echo $idadeHa5Anos . PHP_EOL; // 16

echo gettype($idade) . PHP_EOL; // 21

echo gettype($texto) . PHP_EOL; // string

echo gettype($verdadeiro) . PHP_EOL; // boolean

echo "Hello world!\t Minha idade é $idade anos";