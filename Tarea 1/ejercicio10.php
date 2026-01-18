// Haz un programa que almacene el total de ventas de varios vendedores
y determine cuál obtuvo la mayor venta.//

<?php

echo "<br><br><br>";

$ventasVendedores = [5000, 7500, 3200, 9800, 6100];
$mayorVenta = 0;

    foreach ($ventasVendedores as $venta) {
    if ($venta > $mayorVenta) {
        $mayorVenta = $venta;
        }
    }

echo "La mayor venta es: $mayorVenta";


?>