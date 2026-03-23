<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $year = $_GET["year"];

    if (empty($year)) {
        echo "Error: El campo no debe estar vacío.";
    } elseif (!is_numeric($year) || $year <= 0) {
        echo "Error: El valor debe ser un entero positivo.";
    } else {
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<p><strong>$year</strong> es un año bisiesto.</p>";
        } else {
            echo "<p><strong>$year</strong> no es un año bisiesto.</p>";
        }
    }
}
?>