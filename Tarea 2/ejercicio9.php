9.- Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.

<?php

echo("<br><br><br>");

$alumnos = [
    "Pepe" => [8, 7, 9],
    "Amy" => [10, 9, 9],
    "Jose" => [6, 7, 5]
];

foreach ($alumnos as $nombre => $notas) {
    $promedio = array_sum($notas) / count($notas);
    echo $nombre . ": " . $promedio . "<br>";
}
?>