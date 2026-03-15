<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $texto = $_POST["texto"];

    $palabras = str_word_count($texto, 1);
    $totalPalabras = count($palabras);

    $oraciones = substr_count($texto, ".");

    $masLarga = "";

    foreach ($palabras as $p) {
        if (strlen($p) > strlen($masLarga)) {
            $masLarga = $p;
        }
    }

    $totalCaracteres = 0;

    foreach ($palabras as $p) {
        $totalCaracteres += strlen($p);
    }

    $promedio = 0;

    if ($totalPalabras > 0) {
        $promedio = round($totalCaracteres / $totalPalabras, 2);
    }

    echo "Total de palabras: $totalPalabras <br>";
    echo "Total de oraciones: $oraciones <br>";
    echo "Palabra más larga: $masLarga <br>";
    echo "Promedio de caracteres por palabra: $promedio";

    }

?>