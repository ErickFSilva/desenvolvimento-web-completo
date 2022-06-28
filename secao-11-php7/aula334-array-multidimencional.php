<?php

// Array multidimencional
$listaCoisas = [];

// Array associativos
$listaCoisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
$listaCoisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];


// Saída
echo '<pre>';
print_r($listaCoisas);
echo '</pre>';

echo '<hr>';

echo $listaCoisas['frutas'][3];
echo '<br>';
echo $listaCoisas['pessoas'][2];

echo '<hr>';

echo $listaCoisas['pessoas'][1] . ' gosta de ' . $listaCoisas['frutas'][4];
