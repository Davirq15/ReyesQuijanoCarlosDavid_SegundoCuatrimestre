Haz un programa que declare un arreglo y cuente pares e impares.

<?php

echo("<br><br>");


$arreglo = [2, 3, 47, 28, 99, 24, 63, 38, 19, 7];
$pares = 0;

foreach ($arreglo as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    }
}
$impares = count($arreglo) - $pares;
echo "El arreglo tiene $pares números pares y $impares números impares.";

?>