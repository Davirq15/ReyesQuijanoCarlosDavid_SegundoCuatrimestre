//Haz un programa que almacene las ventas de una semana y muestre cuántos días las ventas fueron mayores a $3,000.

<?php

echo "<br><br><br>";

$ventasDiarias = [6200, 4780, 9056, 1003, 809, 288, 2999];
$ventasM = count($ventasDiarias);
$diasAltos = 0;

    foreach ($ventasDiarias as $venta) {
        if ($venta > 3000) {
            $diasAltos = $diasAltos + 1;
        }
    }

    echo "Días con ventas mayores a 3000: $diasAltos";
?>