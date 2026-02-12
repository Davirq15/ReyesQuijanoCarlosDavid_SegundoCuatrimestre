Haz un programa que declare un arreglo asociativo de productos con precio y calcule el total.

<?php

echo("<br><br>");

$productos = [
    "mouse" => 120,
    "teclado" => 230,
    "audifonos" => 470,
    "bocina" => 615
];
$total = 0;

    foreach ($productos as $producto) {
        $total += $producto;
    }
echo "El total de todos los productos es de: $" . $total;

?>