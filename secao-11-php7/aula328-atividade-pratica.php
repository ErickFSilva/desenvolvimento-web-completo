<?php

    function calculaIR($salario) {

        $valorIR = 0;

        if ($salario <= 1903.98) {
            return $valorIR = 'isento';
        }
        else if ($salario >= 1903.99 && $salario <= 2826.65) {
            return  $valorIR = $salario * 7.5 / 100;
        }
        else if ($salario >= 2826.66 && $salario <= 3751.05) {
            return $valorIR = $salario * 15 / 100;
        }
        else if ($salario >= 3751.06 && $salario <= 4664.68) {
            return $valorIR = $salario * 22.5 / 100;
        }
        else {
            return $valorIR = $salario * 27.5 / 100;
        }

    }

    echo calculaIR(5000);

?>