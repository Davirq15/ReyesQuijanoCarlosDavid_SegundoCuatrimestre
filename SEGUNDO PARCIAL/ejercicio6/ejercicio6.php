<?php

if (isset($_GET['nombre'])) {

    $nombre_completo = trim($_GET['nombre']);

    // Separar por espacios
    $palabras = explode(" ", $nombre_completo);

    $iniciales = "";

    foreach ($palabras as $palabra) {
        if ($palabra != "") {
            $iniciales .= strtoupper($palabra[0]) . ".";
        }
    }

    echo "Nombre ingresado: " . $nombre_completo . "<br><br>";
    echo "Iniciales: " . $iniciales;

} else {
    echo "No se recibió ningún nombre.";
}

?>