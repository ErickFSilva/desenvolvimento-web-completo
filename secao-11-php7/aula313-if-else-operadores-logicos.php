<?php
    // Operador E (AND ou &&): verdadeiro se todas as expressões forem verdadeiras
    if(5 === '5'  && 10 > 3) {
        echo 'Verdadeiro<br>';
    }
    else {
        echo 'Falso<br>';
    }

    // Operador OU (OR ou ||): verdadeiro se pelo menos uma das expressões for verdadeira
    if(5 === '5'  || 10 > 3) {
        echo 'Verdadeiro<br>';
    }
    else {
        echo 'Falso<br>';
    }

    // Operador XOR (XOR): verdadeiro apenas se se uma das expressões for verdadeira, mas não ambas
    if(5 === '5'  xor 10 > 3) {
        echo 'Verdadeiro<br>';
    }
    else {
        echo 'Falso<br>';
    }

    // Operador NEGAÇÃO (!): Inverte o resultado da expressão
    if(!(5 === '5')  && !(10 > 3)) {
        echo 'Verdadeiro<br>';
    }
    else {
        echo 'Falso<br>';
    }

?>