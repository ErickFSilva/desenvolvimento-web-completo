<?php

/**
 * in_array(): retorna 'true' ou 'false' para a existência do que está sendo procurado
 * array_search(): retorna o índice do valor pesquisado, caso ele exista
 */

$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

echo '<pre>';
print_r($lista_frutas);
echo '</pre>';


/**
 * in_array()
 * true -> texto = 1
 * false -> testo = vazio
 */

echo in_array('Maçã', $lista_frutas) ? 'Existe' : 'Não existe';

echo '<br>';

$fruta = 'Cajú';
$existe = in_array($fruta, $lista_frutas);
if ($existe) {
    echo "Sim, $fruta existe no array";
} else {
    echo "Não, $fruta não existe no array";
}


/**
 * array_search()
 * Quando o valor não é encontrado retorna 'null'
 */

echo '<hr>';

echo array_search('Uva', $lista_frutas);

echo '<br>';

$existe2 = array_search('Maçã', $lista_frutas);
if ($existe2 != null || $existe2 == 0) {
    echo $lista_frutas[$existe2];
} else {
    echo 'Não, o valor pesquisado não existe no array';
}


/**
 * in_array() -> com array multidimencional
 * array_search() -> com array multidimencional
 */

echo '<hr>';

$lista_coisas = [
    'frutas' => $lista_frutas,
    'pessoas' => ['João', 'Maria']
];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo '<br>';

$fruta2 = 'Uva';
echo in_array($fruta2, $lista_coisas['frutas']) ? $fruta2 : 'Não, o valor pesquisado não existe no array';

echo '<br>';

$posicao = array_search('João', $lista_coisas['pessoas']);
if ($posicao != null || $posicao == 0) {
    echo $lista_coisas['pessoas'][$posicao];
} else {
    echo 'Não, o valor pesquisado não existe no array';
}
