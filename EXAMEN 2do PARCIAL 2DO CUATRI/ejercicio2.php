<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $number = $_POST['number'] ?? '';

    if (empty($number)) {
        echo "Error: El campo no puede estar vacío.";
    } else {
        if (!is_numeric($number) || $number != (int)$number) {
            echo "Error: Por favor, ingrese un número entero.";
        } else {
            $number = (int)$number;
            if ($number % 2 == 0) {
                echo "El número ingresado: <strong>$number</strong> es par.";
            } else {
                echo "El número ingresado: <strong>$number</strong> es impar.";
            }
        }
    }
}

?>