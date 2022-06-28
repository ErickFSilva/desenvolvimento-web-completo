<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>

<body>

    <?php

        $preIncremento = '<strong>Pré-incremento (++$a)</strong> - Adiciona uma unidade antes de retornar $a';
        $posIncremento = '<strong>Pós-incremento ($a++)</strong> - Retorna $a e depois adiciona uma unidade';
        $preDecremento = '<strong>Pré-decremento (--$a)</strong> - Diminui uma unidade antes de retornar $a';
        $posDecremento = '<strong>Pós-decremento ($a--)</strong> - Retorna $a e depois diminui uma unidade';

    ?>

    <main>
        <h1>Operadores de Incremento e Decremento</h1>

        <dl>
            <dt><strong>Operadores:</strong></dt>
            <dd><?= $preIncremento ?></dd>
            <dd><?= $posIncremento ?></dd>
            <dd><?= $preDecremento ?></dd>
            <dd><?= $posDecremento ?></dd>
        </dl>
    </main>

</body>

</html>