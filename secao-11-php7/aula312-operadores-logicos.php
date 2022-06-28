<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>

<body>

<h1>Operadores Lógicos</h1>
<h2>Servem para conectar operações de comparação criando condições mais complexas de decisão</h2>

<?php

    $operadorE = 'Operador E (AND ou &&): verdadeiro se todas as expressões forem verdadeiras';
    $operadorOU = 'Operador OU (OR ou ||): verdadeiro se pelo menos uma das expressões for verdadeira';
    $operadorXOR = 'Operador XOR (XOR): verdadeiro apenas se se uma das expressões for verdadeira, mas não ambas';
    $operadorNEG = 'Operador NEGAÇÃO (!): Inverte o resultado da expressão';

?>

<dl>
    <dt>Operadores:</dt>
        <dd><?= $operadorE ?></dd>
        <dd><?= $operadorOU ?></dd>
        <dd><?= $operadorXOR ?></dd>
        <dd><?= $operadorNEG ?></dd>
</dl>

</body>

</html>