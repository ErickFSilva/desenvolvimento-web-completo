<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>

<?php

    // https://www.php.net/manual/pt_BR/timezones.america.php

    $date = '(formato) Recuperar a data atual';
    $date_default_timezone_get = '(timezone) Recuperar o timezone default da aplicação';
    $date_default_timezone_set = '(timezone) Atualizar o timezone default da aplicação';
    $strtotime = '(data) Transformar datas textuais em segundos';

    $dataInicial = '2018-04-24';
    $dataFinal = '2018-05-15';

    $timeInicial = strtotime($dataInicial);
    $timeFinal = strtotime($dataFinal);

    $diferencaTimes = abs($timeInicial - $timeFinal);
    $segundosDia = 24 * 60 * 60;

    $diferencaDias = $diferencaTimes / $segundosDia;

?>

<main>

    <h1>Funções nativas para manipular datas</h1>

    <dl>
        <dt><strong>date: </strong><?= $date ?></dt>
            <dd><?= date('Y/m/d H:i') ?></dd>

        <dt><strong>date_default_timezone_get: </strong><?= $date_default_timezone_get ?></dt>
            <dd><?= date_default_timezone_get() ?></dd>

        <dt><strong>date_default_timezone_set: </strong><?= $date_default_timezone_set ?></dt>
            <dd><?php date_default_timezone_set('America/Manaus') ?></dd>
            <dd><?= date_default_timezone_get() ?></dd>
            <dd><?= date('Y/m/d H:i') ?></dd>

            <dd><?php date_default_timezone_set('America/Recife') ?></dd>
            <dd><?= date_default_timezone_get() ?></dd>
            <dd><?= date('Y/m/d H:i') ?></dd>

        <dt><strong>strtotime: </strong><?= $strtotime ?></dt>
            <dd>A diferença de segundos entre a data inicial (<?= $dataInicial ?>) e a data final (<?= $dataFinal ?>) é <?= $diferencaTimes ?> segundos</dd>
            <dd>A diferença de dias entre as datas são: <?= $diferencaDias ?> dias</dd>
    </dl>

</main>
    
</body>
</html>