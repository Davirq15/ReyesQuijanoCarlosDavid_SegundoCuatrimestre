Haz un programa que declare una frase y muestre la palabra más larga

<?php

echo("<br><br>");

$frase = "soy un sigma boy";
$palabras = explode(" ", $frase);
$palabraMasLarga = "";

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }
echo "La palabra más larga es: " . $palabraMasLarga;

?>