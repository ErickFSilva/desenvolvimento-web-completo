<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>

<body>

    <?php

        function exibirBoasVindas() {
            echo "Bem-vindo ao curso de PHP!";
        }


        function calcularAreaTerreno($largura, $cumprimento) {
            $area = $largura * $cumprimento;
            return $area;
        }

        $areaTerreno = calcularAreaTerreno(10, 20);

    ?>

    <h1><?= exibirBoasVindas(); ?></h1>
    <p>Área do terreno: <?= $areaTerreno; ?>m<sup>2</sup></p>

</body>

</html>