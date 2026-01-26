2.- Haz un programa que declare un arreglo de edades y muestre la edad mayor.

<?php

echo("<br><br><br>");

$edades = [50, 24, 32, 18, 61, 7];
$edadMasAlta = 0;

    foreach ($edades as $edad) {
    if ($edad > $edadMasAlta) {
        $edadMasAlta = $edad;
        }
    }
echo "La edad más alta es: $edadMasAlta";

?>