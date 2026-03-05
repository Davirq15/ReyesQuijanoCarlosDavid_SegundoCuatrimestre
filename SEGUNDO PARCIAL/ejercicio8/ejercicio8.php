<?php

if (isset($_GET['n'])) {

    $n = (int)$_GET['n'];

    if ($n <= 0) {
        echo "El número debe ser positivo.";
    } else {

        $suma_total = 0;
        $suma_pares = 0;
        $suma_impares = 0;

        for ($i = 1; $i <= $n; $i++) {

            $suma_total += $i;

            if ($i % 2 == 0) {
                $suma_pares += $i;
            } else {
                $suma_impares += $i;
            }
        }

        echo "Número ingresado: " . $n . "<br><br>";

        echo "Suma del 1 al $n: " . $suma_total . "<br>";
        echo "Suma de números pares: " . $suma_pares . "<br>";
        echo "Suma de números impares: " . $suma_impares;
    }

} else {
    echo "No se recibió ningún número.";
}

?>