<?php

if (isset($_GET['frase']) && isset($_GET['palabra'])) {

    $frase = $_GET['frase'];
    $palabra = $_GET['palabra'];

    // Contar apariciones (sin importar mayúsculas)
    $conteo = substr_count(strtolower($frase), strtolower($palabra));

    echo "Frase ingresada: " . $frase . "<br><br>";
    echo "Palabra buscada: " . $palabra . "<br><br>";

    echo "Número de veces que aparece: " . $conteo . "<br><br>";

    // Verificar si contiene la palabra
    if (stripos($frase, $palabra) !== false) {
        echo "La frase SÍ contiene la palabra.<br><br>";
    } else {
        echo "La frase NO contiene la palabra.<br><br>";
    }

    // Resaltar palabra en negritas
    $frase_resaltada = str_ireplace(
        $palabra,
        "<strong>" . $palabra . "</strong>",
        $frase
    );

    echo "Frase resaltada:<br>";
    echo $frase_resaltada;

} else {
    echo "No se recibieron datos.";
}

?>