// Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de números separados por comas
(Ya definida en el código), y devuelva la suma de esos números. Maneja los posibles errores.

<?php

echo("<br> <br>");

$cadena = "15,20,37,40";

$numeros = explode(",", $cadena);
$suma = 0;

foreach ($numeros as $num) {
    echo $num . "<br>";   // muestra cada número
    $suma += $num;
}

echo "Suma: " . $suma;

?>
