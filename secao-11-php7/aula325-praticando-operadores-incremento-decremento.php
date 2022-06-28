<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
</head>

<body>

    <main>
        <h3>Pós-incremento:</h3>
        <?php
            $a = 7;

            echo "O valor contido em 'a' é $a<br>";
            echo "O valor contido em 'a' após o pós-incremento é ".$a++.'<br>';
            echo "O valor atualizado é $a";
        ?>

        <h3>Pré-incremento:</h3>
        <?php
            $b = 14;

            echo "O valor contido em 'b' é $b<br>";
            echo "O valor contido em 'b' após o pré-incremento é ".++$b.'<br>';
        ?>

        <h3>Pós decremento:</h3>
        <?php
            $c = 21;

            echo "O valor contido em 'c' é $c<br>";
            echo "O valor contido em 'c' após o pós-decremento é ".$c--.'<br>';
            echo "O valor atualizado é $c";
        ?>

        <h3>Pré-decremento:</h3>
        <?php
            $d = 28;

            echo "O valor contido em 'b' é $d<br>";
            echo "O valor contido em 'b' após o pré-decremento é ".--$d.'<br>';
        ?>
    </main>

</body>

</html>