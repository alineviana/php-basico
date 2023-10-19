<?php

function exibirMensagem(string $mensagem): void
{
    echo $mensagem . "<br>";
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

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibirConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}