<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>PHP7</title>
</head>
<body>

<?php

    // Variáveis
    $idade = 35;
    $peso = 80.5;
    $atenteRequisitos = false;

    // Lógica
    if($idade >= 16 && $idade <= 69) {
        if($peso >= 50) {
            $atenteRequisitos = true;
        }
    }

?>

<main>
    <h1>Doação de Sangue</h1>

    <div>
        Idade: <?= $idade ?><br>
        Peso: <?= $peso ?><br>
        Para doação de sangue: <?= $atenteRequisitos ? 'Atende aos requisitos' : 'Não atende aos requisitos' ?>
    </div>
</main>

</body>
</html>