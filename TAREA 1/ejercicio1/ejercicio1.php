<?php

if (isset($_GET['numero'])) {

    $numero = (int)$_GET['numero'];

    // Par o impar
    if ($numero % 2 == 0) {
        echo "El número es PAR<br>";
    } else {
        echo "El número es IMPAR<br>";
    }

    // Positivo o negativo
    if ($numero > 0) {
        echo "El número es POSITIVO";
    } elseif ($numero < 0) {
        echo "El número es NEGATIVO";
    } else {
        echo "El número es CERO";
    }

} else {
    echo "No se recibió ningún número.";
}

?>