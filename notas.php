<?php

$notas = [
   'Junin' => 1,
   'Ana' => 5,
   'Lucas' => 7,
   'Vinicius' => 4,
   'Luana' => 3,
   'Bia' => 9
];

echo 'Ordenando um array crescente e mantendo os índices';
asort($notas);
echo "<pre>"; print_r($notas); echo "</pre>";

echo 'Ordenando um array decrescente e mantendo os índices';
arsort($notas);
echo "<pre>"; print_r($notas); echo "</pre>";

echo 'Ordenando em ordem alfabética um array pelo índice';
ksort($notas);
echo "<pre>"; print_r($notas); echo "</pre>";

echo 'Ordenando em ordem do Z-A um array pelo índice';
krsort($notas);
echo "<pre>"; print_r($notas); echo "</pre>";