<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>

<body>

<?php

    // gettype() => retorna o tipo da variável

    $valorA = 10;
    $valorB = 80.5;
    $valorC = '22.12';
    $valorD = true;

    // Casting de int:
    $valor = (float) $valorA;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (double) $valorA;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (string) $valorA;
    echo $valor . ' ' . gettype($valor) . '<br>';


    // Casting de double/float:
    $valor = (int) $valorB;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (string) $valorB;
    echo $valor . ' ' . gettype($valor) . '<br>';

    // Casting de float:
    $valor = (int) $valorC;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (double) $valorC;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (boolean) $valorC;
    echo $valor . ' ' . gettype($valor) . '<br>';

    // Casting de boolean
    $valor = (int) $valorD;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (double) $valorD;
    echo $valor . ' ' . gettype($valor) . '<br>';

    $valor = (string) $valorD;
    echo $valor . ' ' . gettype($valor) . '<br>';

?>

</body>

</html>