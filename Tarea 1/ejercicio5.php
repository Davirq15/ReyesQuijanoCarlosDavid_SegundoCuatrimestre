//Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo,
muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.//

<?php

echo "<br><br><br>";

    $ventas = [
        "laptop" => 4,
        "Mouse" => 6,
        "Teclado" => 3,
        "USB" => 8,
        "Audifonos" => 5,
    ];

    $total = 0;

    foreach ($ventas as $producto => $cantidad) {
        echo"El producto ($producto) se vendio $cantidad veces";
        echo "<br><br>";
        $total = $cantidad + $total;
    }


?>