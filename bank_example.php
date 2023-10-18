<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => '1000'
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ],
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => '300'
    ]
];

function exibirMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
};

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibirMensagem(mensagem: 'Você não pode sacar!');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        echo "Depósitos precisam ter valores positivos. ";
    }
    return $conta;
}

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 200);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], -15);
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], 2500);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 100);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 1000);

foreach ($contasCorrentes as $cpf => $conta) {
    exibirMensagem(
        mensagem: "$cpf | $conta[titular] => $conta[saldo]"
    );
}