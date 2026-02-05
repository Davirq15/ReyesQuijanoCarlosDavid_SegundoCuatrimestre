4.- Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.

<?php

echo("<br><br><br>");

$cadena = "super sigma";


$cadena = str_replace(" ", "", strtolower($cadena));
$conteo = array_count_values(str_split($cadena));// esto cuenta cuántas veces aparece cada letra
// array = ["s", "u", "p", "e", "r", "s", "i", "g", "m", "a"]

foreach ($conteo as $letra => $cantidad) {
    echo $letra . ": " . $cantidad . "<br>";
}

?>