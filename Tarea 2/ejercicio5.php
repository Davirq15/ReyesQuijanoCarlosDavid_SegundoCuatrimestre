5.- Haz un programa que declare un arreglo de números y separe pares e impares
en dos arreglos nuevos.

<?php

echo("<br><br><br>");

$numeros = [5, 19, 40, 12, 65, 38, 56, 99, 24, 73];
$pares = [];
$impares = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }

echo "Pares:<br>";
print_r($pares);

echo "<br><br>Impares:<br>";
print_r($impares);


?>