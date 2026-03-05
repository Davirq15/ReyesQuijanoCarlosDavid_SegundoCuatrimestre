<?php

if (isset($_GET['producto']) && isset($_GET['precio'])) {

    $producto = $_GET['producto'];
    $precio = (float)$_GET['precio'];

    $iva = $precio * 0.16;
    $total = $precio + $iva;

    echo "Producto: " . $producto . "<br><br>";
    echo "Precio sin IVA: $" . number_format($precio, 2) . "<br>";
    echo "IVA (16%): $" . number_format($iva, 2) . "<br>";
    echo "Precio total con IVA: $" . number_format($total, 2);

} else {
    echo "No se recibieron datos.";
}

?>