<?php

if (isset($_GET['nombres'])) {

    $entrada = $_GET['nombres'];

    // Convertir texto a arreglo
    $lista = explode(",", $entrada);

    // Quitar espacios
    $lista = array_map("trim", $lista);

    echo "<hr>";
    echo "<strong>Nombres ingresados:</strong><br>";

    foreach ($lista as $nombre) {
        echo $nombre . "<br>";
    }

    echo "<hr>";
    echo "Total de nombres: " . count($lista);

    // Ordenar alfabéticamente
    sort($lista);

    echo "<hr>";
    echo "<strong>Nombres ordenados:</strong><br>";

    foreach ($lista as $nombre) {
        echo $nombre . "<br>";
    }

    // Verificar duplicados
    if (count($lista) != count(array_unique($lista))) {
        echo "<hr>Hay nombres duplicados.";
    } else {
        echo "<hr>No hay nombres duplicados.";
    }

} else {
    echo "No se recibieron datos.";
}

?>
