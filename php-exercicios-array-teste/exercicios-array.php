<?php

echo "1.	Crie um array com 5 números positivos aleatórios entre 1 e 1000 <br>";

$values = range(1, 1000);

for ($i = 1; $i < 1000; $i++) {
    $array = array_rand($values, 5);
}

foreach ($array as $key => $value) {
    echo "$value <br>";
}

echo "<br>";
// ---------------------------------------------------------------------------------
echo "2.	Faça uma função que retorna o primeiro elemento de um array<br>";

function primeiro($array)
{
    reset($array);
    echo current($array);
}
primeiro($array);

echo "<br>";
echo "<br>";
// ---------------------------------------------------------------------------------
echo "3.	Faça uma função que recebe um array e retorna uma cópia do array recebido, mas sem o seu último elemento (portanto com tamanho n-1)<br>";

function copiaArray($array)
{
    $count = count($array);
    for ($i = 0; $i < ($count - 1); $i++) {
        echo "$array[$i] <br>";
    }
}
copiaArray($array);

echo "<br>";
// ---------------------------------------------------------------------------------
echo "4.	Faça uma função que recebe um array e um parâmetro 'ASC' ou 'DESC', que retorna um array ordenado na ordem crescente ou decrescente<br>";

function desc($array)
{
    echo "Ordem decrescente: <br>";
    $desc = arsort($array);
    if ($desc == true) {
        foreach ($array as $key => $value) {
            echo "$value <br>";
        }
    }
}
desc($array);

function asc($array)
{
    echo "Ordem crescente: <br>";
    $asc = asort($array);
    if ($asc == true) {
        foreach ($array as $key => $value) {
            echo "$value <br>";
        }
    }
}
asc($array);

echo "<br>";
// ---------------------------------------------------------------------------------
echo "5.	Faça uma função que recebe um array de números e retorna um array de mesmo tamanho com as raízes quadradas dos números<br>";

function raizArray($array)
{
    foreach ($array as $key => $value) {
        $raiz = number_format(sqrt($value), 2);
        echo "$raiz <br>";
    }
}
raizArray($array);

echo "<br>";
// ---------------------------------------------------------------------------------
echo "6.	Faça uma função que recebe um array de números e calcula a média deles<br>";

function media($array)
{
    $sum = array_sum($array);
    echo "Soma: $sum <br>";
    $count = count($array);
    echo "Quantidade: $count <br>";
    $media = number_format(($sum / $count), 2);
    echo "Média: $media <br>";
}
media($array);
