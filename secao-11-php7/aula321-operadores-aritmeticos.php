<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>

<body>

<?php
    $adicao = 'Adição(+) - Soma valores';
    $subtracao = 'Subtração(-) - Diferença entre valores';
    $multiplicacao = 'Multiplicação(*) - Produto dos valores';
    $divisao = 'Divisão(/) - Quociente dos valores';
    $modulo = 'Módulo(%) - Resto existente em uma operação de divisão';
?>

<h1>Operadores aritméticos</h1>

<dl>
    <dt><strong>Operadores</strong></dt>
        <dd><?= $adicao ?></dd>
        <dd><?= $subtracao ?></dd>
        <dd><?= $multiplicacao ?></dd>
        <dd><?= $divisao ?></dd>
        <dd><?= $modulo ?></dd>
</dl>

</body>

</html>