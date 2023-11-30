<?php

$notas = [
    'junin' => 1,
    'ana' => null,
    'lucas' => 7,
    'vinicius' => 4,
    'luana' => 3,
    'bia' => 9
 ];

echo 'Verificando se a variável é um array - is_array';
echo "<pre>"; var_dump(is_array($notas)); echo "</pre>";

echo 'Verificando se a variável é um array numérico sequencial - array_is_list';
echo "<pre>"; var_dump(array_is_list($notas)); echo "</pre>";

echo 'Verificando se existe um índice no array mesmo seu valor sendo nulo - array_key_exists';
echo "<pre>"; var_dump(array_key_exists('junin', $notas)); echo "</pre>";

echo 'Verificando se existe um índice no array mas retorna false se o valor for nulo - isset';
echo "<pre>"; var_dump(isset($notas['ana'])); echo "</pre>";

echo 'Verificando se existe um valor igual ao informado no array (terceiro parâmetro indica se a verificação será específica e não com ==) - in_array';
echo "<pre>"; var_dump(in_array(9, $notas, true)); echo "</pre>";

echo 'Verificando se existe um valor igual ao informado no array e retornando a chave que possui esse valor (3 tipos de retorno int e string para os índices do array e boolean false caso não exista o valor) - array_search';
echo "<pre>"; var_dump(array_search(9, $notas, true)); echo "</pre>";

$notas2 = [
    'junin' => 1,
    'ana' => null,
    'lucas' => 7,
    'vinicius' => 4,
    'luana' => 6,
    'bia' => 9
 ];

echo 'Verificando se existe algum <b>valor do índice</b> no primeiro array do parametro que não exista nos outros (retorno array com o índice associado ao valor) - array_diff';
echo "<pre>"; var_dump(array_diff($notas, $notas2)); echo "</pre>";

echo 'Verificando se existe algum <b>índice</b> no primeiro array do parametro que não exista nos outros (retorno array com o índice diferente) - array_diff_key';
echo "<pre>"; var_dump(array_diff_key($notas, $notas2)); echo "</pre>";

echo 'Verificando se existe algum <b>índice e valor</b> no primeiro array do parametro que não exista nos outros (retorno array com o índice diferente) - array_diff_assoc';
echo "<pre>"; var_dump(array_diff_assoc($notas, $notas2)); echo "</pre>";
