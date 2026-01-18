//Haz un programa que guarde los precios de varios productos en un arreglo
y calcule el precio total sumando todos los valores.//

<?php

echo "<br><br><br>";

    $precios = [
        "Manzana" => 8,
        "Pera" => 7,
        "Piña" => 18,
        "Banana" => 5,
        "Uva" => 3,
    ];

    $total = 0;

    foreach ($precios as $precio) {
        $total = $total + $precio;
    }

        echo"La suma total de todos los produtos es $total";
?>