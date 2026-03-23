<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $input = $_POST["text"];

    if (empty($input)) {
        echo "El campo no puede estar vacío.";
        exit;
    }

    $palabras = array_map('trim', explode(",", $input));
    $totalPalabras = count($palabras);

    echo "Total de palabras: <strong>$totalPalabras</strong> <br><br>";

    echo "<strong>Palabras detectadas:</strong><br><br>";
    foreach ($palabras as $p) {
        echo "$p<br>";
    }

    echo "<br><strong>Palabras en orden alfabético:</strong><br><br>";
    sort($palabras);
    foreach ($palabras as $p) {
        echo "$p<br>";
    }
}
?>