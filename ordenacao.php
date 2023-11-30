<?php

$notas = [
    10,
    8,
    5,
    9
];

// Essa função aponta para os valores dentro do array e irá modifica-los (ele não cria um novo)
//sort($notas);

echo 'Notas desordenadas:<br>';
echo "<pre>"; print_r($notas); echo "</pre>";

echo 'Notas ordenadas:<br>';
$notasOrdenadas = $notas;
sort($notasOrdenadas);
echo "<pre>"; print_r($notasOrdenadas); echo "</pre>";

$nomes = [
    'Juninho',
    'Luis',
    'Ana',
    'Aline'
];

sort($nomes);
echo 'Utilizando função sort em string';
echo "<pre>"; print_r($nomes); echo "</pre>";

$arrayNotas = [
    [
        'nome' => 'Juninho',
        'nota' => 7
    ],
    [
        'nome' => 'Ana',
        'nota' => 10
    ]
];

echo 'Ordenando array multidimencional';

function ordenaNotas($notaUm, $notaDois){
    return $notaDois['nota'] <=> $notaUm['nota'];
}

usort($arrayNotas, 'ordenaNotas');
echo "<pre>"; print_r($arrayNotas); echo "</pre>";