<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>
<body>

<?php

    // $strtolower = 'Transforma todos os caracteres da string em minúsculos';
    // $strtoupper = 'Transforma todos os caracteres da string em maiúculos';
    // $ucfirst = 'Transforma o primeiro caracter da string em maiúsculo';
    // $strlen = 'Conta a quantidade de caracteres de uma string';
    // $str_replace = 'Substitui uma cadeia de caracteres por outra dentro de uma string';
    // $substr = 'Retorna parte de uma string';

    $texto = 'curso completo de PHP';

?>

<h1>Funções nativas para manipular strings</h1>

<ul>
    <li>strtolower = 'Transforma todos os caracteres da string em minúsculos'</li>
    <li>strtoupper = 'Transforma todos os caracteres da string em maiúculos'</li>
    <li>ucfirst = 'Transforma o primeiro caracter da string em maiúsculo'</li>
    <li>strlen = 'Conta a quantidade de caracteres de uma string'</li>
    <li>str_replace = 'Substitui uma cadeia de caracteres por outra dentro de uma string'</li>
    <li>substr = 'Retorna parte de uma string'</li>
</ul>

<h3><?= $texto ?></h3>
<p><?= strtolower($texto) ?></p>
<p><?= strtoupper($texto) ?></p>
<p><?= ucfirst($texto) ?></p>
<p><?= strlen($texto) ?></p>
<p><?= str_replace('PHP', 'FullStack PHP', $texto) ?></p>
<p><?= '...'.substr(str_replace('PHP', 'FullStack PHP', $texto), 18, 13) ?></p>

</body>
</html>