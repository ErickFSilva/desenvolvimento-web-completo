<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>
<body>

<?php

    /**
     * https://www.php.net/manual/pt_BR/timezones.america.php
     * https://www.php.net/manual/pt_BR/function.date.php
     * America/Recife
     */

    $date = 'date (formato) Recuperar a data atual';
    $date_default_timezone_get = 'date_default_timezone_get (timezone) Recuperar o timezone default da aplicação';
    $date_default_timezone_set = 'date_default_timezone_set (timezone) Atualizar o timezone default da aplicação';
    $strtotime = 'strtotime (data) Transformar datas textuais em segundos';

    // Recupera a data atual
    date_default_timezone_set('America/Recife');
    $timeZone = date_default_timezone_get();
    $dataAtual = date('Y-m-d H:i:s');

    // timestamp
    $data_inicial = '2022-05-22';
    $data_final = '2022-11-12';
    
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    
    $diferenca_times = $time_final - $time_inicial;

    $segundosDia = 24 * 60 * 60;

    $diasEntreDatas = $diferenca_times / $segundosDia;

?>

<main>

    <h1>Funções nativas para manipular datas</h1>

    <ul>
        <li>
            <?= $date ?>
        </li>
        <li>
            <?= $date_default_timezone_get ?>
        </li>
        <li>
            <?= $date_default_timezone_set ?>
        </li>
        <li>
            <?= $strtotime ?>
        </li>
    </ul>

    <dl>
        <dt><strong>Data atual: </strong><?= $dataAtual ?></dt>
            <dd><strong>Timezone: </strong><?= $timeZone ?></dd>
        
        <dt><strong>Calculando datas:</strong></dt>
            <dd><strong>- Data inicial: </strong><?= $data_inicial ?> = <?= $time_inicial ?> em segundos</dd>
            <dd><strong>- Data final: </strong><?= $data_final ?> = <?= $time_final ?> em segundos</dd>
            <dd><strong>- Dias entre datas: </strong><?= $diasEntreDatas ?></dd>
    </dl>

</main>
    
</body>
</html>