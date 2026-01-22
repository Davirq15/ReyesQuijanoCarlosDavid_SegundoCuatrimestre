// Ejercicio 3: Haz un programa que reciba una cadena de texto (Ya definida en el código),
y cuente cuántas veces aparece una subcadena específica dentro de esa cadena. Maneja los posibles errores.

<?php

echo("<br> <br>");

$texto = "Hola hola hola mundo";
$buscar = "hola";

$contador = substr_count(strtolower($texto), strtolower($buscar));

echo $contador;

?>