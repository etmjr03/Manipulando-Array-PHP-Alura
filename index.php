<?php
// Arrays associativos aceitam somente strings ou numeros int como chave
// conversões de chaves "true = 1, false = 0, 1.3 = 1, 2.9 = 2"
$array = [
    1    => 'um',
    true => 'dois',
    1.3  => 'três'
];

// Estrutura de dados de ARRAYS EM PHP USAM O MÉTODO HASHMAP, ou seja, os valores apontam para um local da memória

echo '<pre>';
var_dump($array);
echo '</pre>';