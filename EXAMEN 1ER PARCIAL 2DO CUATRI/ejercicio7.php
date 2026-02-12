Haz un programa que declare un arrreglo de calificaciones y calcule el promedio.

<?php

echo("<br><br>>");

$calificaciones = [6, 8, 4, 10, 7];
$total = 0;

    foreach ($calificaciones as $calificacion) {
        $total += $calificacion;
    }
echo "El promedio de las calificaciones es: " . ($total / count($calificaciones));