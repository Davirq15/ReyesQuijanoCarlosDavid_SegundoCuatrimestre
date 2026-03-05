<?php

if (isset($_GET['numeros'])) {

    $entrada = $_GET['numeros'];

    $lista = explode(",", $entrada);
    $lista = array_map("trim", $lista);
    $lista = array_map("intval", $lista);

    $positivos = [];
    $negativos = [];
    $ceros = [];
    $pares = [];
    $impares = [];

    foreach ($lista as $numero) {

        if ($numero > 0) {
            $positivos[] = $numero;
        } elseif ($numero < 0) {
            $negativos[] = $numero;
        } else {
            $ceros[] = $numero;
        }

        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }

    // POSITIVOS
    echo "<hr><strong>Positivos:</strong><br>";
    if (count($positivos) > 0) {
        echo implode(", ", $positivos);
    } else {
        echo "No hay números positivos.";
    }
    echo "<br>Total: " . count($positivos);

    // NEGATIVOS
    echo "<hr><strong>Negativos:</strong><br>";
    if (count($negativos) > 0) {
        echo implode(", ", $negativos);
    } else {
        echo "No hay números negativos.";
    }
    echo "<br>Total: " . count($negativos);

    // CEROS
    echo "<hr><strong>Ceros:</strong><br>";
    if (count($ceros) > 0) {
        echo implode(", ", $ceros);
    } else {
        echo "No hay ceros.";
    }
    echo "<br>Total: " . count($ceros);

    // PARES
    echo "<hr><strong>Pares:</strong><br>";
    if (count($pares) > 0) {
        echo implode(", ", $pares);
    } else {
        echo "No hay números pares.";
    }
    echo "<br>Total: " . count($pares);

    // IMPARES
    echo "<hr><strong>Impares:</strong><br>";
    if (count($impares) > 0) {
        echo implode(", ", $impares);
    } else {
        echo "No hay números impares.";
    }
    echo "<br>Total: " . count($impares);

} else {
    echo "No se recibieron datos.";
}

?>
