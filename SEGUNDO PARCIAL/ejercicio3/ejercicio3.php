<?php

if (isset($_GET['articulo']) && isset($_GET['precio']) && isset($_GET['descuento'])) {

    $articulo = $_GET['articulo'];
    $precio = (float)$_GET['precio'];
    $porcentaje = (float)$_GET['descuento'];

    $monto_descuento = $precio * ($porcentaje / 100);
    $precio_final = $precio - $monto_descuento;

    echo "Artículo: " . $articulo . "<br><br>";
    echo "Precio original: $" . number_format($precio, 2) . "<br>";
    echo "Porcentaje de descuento: " . $porcentaje . "%<br>";
    echo "Monto del descuento: $" . number_format($monto_descuento, 2) . "<br>";
    echo "Precio final: $" . number_format($precio_final, 2) . "<br><br>";

    // Clasificación del descuento
    if ($porcentaje < 10) {
        echo "Tipo de descuento: Bajo";
    } elseif ($porcentaje <= 30) {
        echo "Tipo de descuento: Moderado";
    } else {
        echo "Tipo de descuento: Alto";
    }

} else {
    echo "No se recibieron datos.";
}

?>
