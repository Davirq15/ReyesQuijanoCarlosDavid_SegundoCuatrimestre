<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $p3 = $_POST["p3"];

    $por1 = $_POST["por1"];
    $por2 = $_POST["por2"];
    $por3 = $_POST["por3"];

    $a1 = $p1 * $por1 / 100;
    $a2 = $p2 * $por2 / 100;
    $a3 = $p3 * $por3 / 100;

    $final = $a1 + $a2 + $a3;

    echo "Aportación Parcial 1: $a1 <br>";
    echo "Aportación Parcial 2: $a2 <br>";
    echo "Aportación Examen: $a3 <br>";

    echo "<br>Promedio final: $final <br>";
    if ($final >= 60) {
        echo "Aprobado";
    } else {
        echo "Reprobado";
    }

    $max = max($p1, $p2, $p3);
    $min = min($p1, $p2, $p3);
    echo "<br>Calificación más alta: $max";
    echo "<br>Calificación más baja: $min";

    }

?>