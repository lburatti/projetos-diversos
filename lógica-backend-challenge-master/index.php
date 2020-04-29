<?php

$array = array(
    [1,1,1,1],
    [1,1,1,0],
    [0,1,1,9],
    [1,1,1,0]
    );

print_r($array);
echo "</br>";

$numberFound = false;
$x9 = 0;
$y9 = 0;
$x = 0;
$y = 0;

foreach ($array as $xKey => $xValue) {
    foreach ($xValue as $yKey => $yValue) {
        if($yValue == 9) {
        print_r("O índice do 9 é: ".$xKey."x".$yKey);
        // atribuindo novos valores aos índices do número 9
        $x9 = $xKey;
        $y9 = $yKey;
        echo "</br>";
        }
    }
}

do {
    if($x9 > $x) {
        $x++; // proxima posição em x
    if($array[$x][$y] == 0){
        $x--; // volta para posição anterior
    }
    }

    if($y9 > $y) {
        $y++; // proxima posição em y
    if($array[$x][$y] == 0){
        $y--; // volta para posição anterior
    }
    }
    print_r($x."x".$y);
    echo "</br>";

    if($array[$x][$y] == 9){
        print_r($x."x".$y." ");
        print_r($array[$x][$y]);
        $numberFound = true;
    }

} while (!$numberFound);
?>