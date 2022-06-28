<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>
<body>

<?php

    $ceil = 'Arredonda o valor para cima';
    $floor = 'Arredonda o valor para baixo';
    $round = 'Arredonda o valor com base nas casas decimais';
    $rand = 'Gera um inteiro aleatorio';
    $sqrt = 'Retorna a raiz quadrada';

    $num = 7.3;

?>

<main>
    <h1>Funções Nativas para tarefas Matemáticas</h1>

    <ul type="circle">
        <li><strong>ceil</strong> <?= $ceil ?></li>
        <li><strong>floor</strong> <?= $floor ?></li>
        <li><strong>round</strong> <?= $round ?></li>
        <li><strong>rand</strong> <?= $rand ?></li>
        <li><strong>sqrt</strong> <?= $sqrt ?></li>
    </ul>
</main>

</body>
</html>