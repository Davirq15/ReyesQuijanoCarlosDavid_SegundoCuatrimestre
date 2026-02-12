Haz un programa que ordene un arreglo de números sin funciones predefinidas.

<?php

echo("<br><br>");

$arreglo = [2, 3, 47, 28, 99, 24, 63, 38, 19, 7]; 

    for ($i = 0 ; $i < count($arreglo) - 1 ; $i++) {
        for ($j = $i + 1 ; $j < count($arreglo) ; $j++) {
            if ($arreglo[$i] > $arreglo[$j]) {
                $temp = $arreglo[$i];              #:v
                $arreglo[$i] = $arreglo[$j];
                $arreglo[$j] = $temp;
            }
        }
    }

echo "Arreglo despues de ordenar: ";
foreach ($arreglo as $valor) {
    echo "$valor ";
}

?>