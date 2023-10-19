<?php

require_once 'funcoes_bank_example.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinícius',
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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 200);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], -15);

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);
$contasCorrentes['123.456.789-11'] = depositar($contasCorrentes['123.456.789-11'], 2500);

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 100);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 1000);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

unset($contasCorrentes['123.456.789-11']);

echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta) {
    exibirConta($conta);
}

echo "<ul>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>| Contas Correntes |</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3>
                    <?php echo $conta['titular']; ?> 
                    <?php $cpf; ?>
                </h3>
            </dt>
            <dd>
                SALDO =>  
                <?php echo $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>