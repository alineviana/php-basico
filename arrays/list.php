<?php

$dados = ['Vinícius', 10, 24];
// list($nome, $nota, $idade) = $dados;

extract($dados);
var_dump($nome, $nota, $idade);