<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>

<?php

    $nome = 'Erick';
    $idade = 35;
    $interesse = 'PROGRAMAÇÃO';

    // Para concatenar em php utilize o operador ponto (.)

    // Com aspas simples
    echo 'Olá ' . $nome . ', você tem ' . $idade . ' e tem interesses em ' . $interesse;
    echo '<br>';

    // Com aspas duplas, torna-se um pouco mais lento que com aspas simples
    echo "Olá $nome, você tem $idade e tem interesses em $interesse";

?>
    
</body>
</html>