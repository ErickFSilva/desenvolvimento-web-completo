<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>
    
<?php

    // String
    $nome = 'Erick Ferreira';

    // int
    $idade = 35;

    // float
    $peso = 80.1;

    // boolean
    $fumante = false;

?>

<h1>Ficha cadastral</h1>

<p>Nome: <?= $nome ?></p>
<p>Idade: <?= $idade ?></p>
<p>Peso: <?= $peso ?></p>
<p>Fumante: <?= $fumante ? 'Sim' : 'Não' ?></p>

</body>
</html>