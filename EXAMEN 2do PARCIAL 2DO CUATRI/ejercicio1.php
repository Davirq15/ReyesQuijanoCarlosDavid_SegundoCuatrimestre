<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $num1 = $_GET['num1'] ?? '';
    $num2 = $_GET['num2'] ?? '';
    $operation = $_GET['operation'] ?? '';

    if ($operation === 'dividir' && $num2 == 0) {
        echo "Error: No se puede dividir por cero.";
        exit;
    }

    if (empty($num1)) {
        echo "Error: El campo no debe estar vacío.";
        exit;
    }

    if (empty($num2)) {
        echo "Error: El campo no debe estar vacío.";
        exit;
    }

    switch ($operation) {
        case 'suma':
            $result = $num1 + $num2;
            break;
        case 'resta':
            $result = $num1 - $num2;
            break;
        case 'multiplicar':
            $result = $num1 * $num2;
            break;
        case 'dividir':
            $result = $num1 / $num2;
            break;
        default:
            echo "Error: Operación no válida.";
            exit;
    }

    echo "El resultado de esta operación es: " . $result;
}


?>