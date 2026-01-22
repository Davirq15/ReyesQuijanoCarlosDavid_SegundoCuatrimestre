//Ejercicio 1: Haz un programa que reciba una cadena (ya definida en el codigo), y devuelva la misma cadena pero con las palabras
en orden inverso. Maneja los posibles errores.

<?php

echo("<br> <br>");

$cadena = "Sigma boy";

$palabras = explode(" ", $cadena);
$palabras = array_reverse($palabras);
$cadenaInvertida = implode(" ", $palabras);

echo $cadenaInvertida;

?>