<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>

<?php

    // Sequenciais (númericos)
    $listaFrutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
    $listaFrutas[] = 'Abacaxi';


    // Associativos
    $listaFrutas2 = [
        'a' => 'Banana', 
        'b' => 'Maçã', 
        'x' => 'Morango', 
        'z' => 'Uva', 
        '2' => 'Abacate'
    ];
    $listaFrutas2['w'] = 'Abacaxi';

?>

<main>
    <div>
        <h2>Debugando Arrays Sequenciais</h2>

        <h3>var_dump</h3>
        <pre>
            <?= var_dump($listaFrutas); ?>
        </pre>

        <h3>print_r</h3>
        <pre>
            <?= print_r($listaFrutas); ?>
        </pre>
    </div>
    <hr>
    <div>
        <h2>Debugando Arrays Associativos</h2>

        <h3>var_dump</h3>
        <pre>
            <?= var_dump($listaFrutas2) ?>
        </pre>

        <h3>print_r</h3>
        <pre>
            <?= print_r($listaFrutas2) ?>
        </pre>
    </div>

</main>
    
</body>
</html>