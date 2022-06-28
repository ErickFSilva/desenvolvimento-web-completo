<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>

<?php

// false (true/false) - tipo de variável boolean
// null e empty - valores especiais

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

// Valores null
if(is_null($funcionario1)) {
    echo 'Sim, a variável é null';
}
else {
    echo 'Não, a variável não é null';
}

echo '<br>';

if(is_null($funcionario2)) {
    echo 'Sim, a variável é null';
}
else {
    echo 'Não, a variável não é null';
}

echo '<br>';

if(is_null($funcionario3)) {
    echo 'Sim, a variável é null';
}
else {
    echo 'Não, a variável não é null';
}


// Separador
echo '<hr>';


// Valores vazios
if(empty($funcionario1)) {
    echo 'Sim, a variável está vazia';
}
else {
    echo 'Não, a variável não está vazia';
}

echo '<br>';

if(empty($funcionario2)) {
    echo 'Sim, a variável está vazia';
}
else {
    echo 'Não, a variável não está vazia';
}

echo '<br>';

if(empty($funcionario3)) {
    echo 'Sim, a variável está vazia';
}
else {
    echo 'Não, a variável não está vazia';
}

?>
    
</body>
</html>