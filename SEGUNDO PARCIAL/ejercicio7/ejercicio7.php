<?php

if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {

    $n1 = (int)$_GET['n1'];
    $n2 = (int)$_GET['n2'];
    $n3 = (int)$_GET['n3'];

    $numeros = [$n1, $n2, $n3];

    // Verificar si hay números iguales
    if (count(array_unique($numeros)) < 3) {
        echo "Hay números iguales.<br><br>";
    }

    // Ordenar arreglo
    sort($numeros);

    $menor = $numeros[0];
    $medio = $numeros[1];
    $mayor = $numeros[2];

    echo "Número menor: " . $menor . "<br>";
    echo "Número en medio: " . $medio . "<br>";
    echo "Número mayor: " . $mayor;

} else {
    echo "No se recibieron datos.";
}

?>