7.- Haz un programa que declare un arreglo asociativo con producto
y cantidad y muestre los que están bajos "<5"

<?php

echo("<br><br><br>");

$productos = [
    "uvas" => 3,
    "peras" => 7,
    "remolacha" => 2,
    "platanos" => 10
];

    foreach ($productos as $producto => $cantidad) {
        if ($cantidad < 5) {
            echo $producto . ": " . $cantidad . "<br>";
        }
    }

?>