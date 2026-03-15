<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $litros = $_POST["litros"];
    $precio = $_POST["precio"];
    $km = $_POST["km"];
    $extra = $_POST["extra"];

    $costo = $litros * $precio;
    $rendimiento = round($km/$litros,2);
    $costoKm = round($costo/$km,2);

    $litrosExtra = $extra/$precio;
    $kmExtra = $litrosExtra*$rendimiento;
    echo "Costo total: $costo <br>";
    echo "Rendimiento: $rendimiento km/l <br>";
    echo "Costo por km: $costoKm <br><br>";

    echo "Litros extra: $litrosExtra <br>";
    echo "Km extra posibles: $kmExtra";
    }

?>