<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $texto = $_POST["texto"];

    // mostrar frase original
    echo "<h3>Frase original:</h3>";
    echo $texto;
    echo "<br><br>";

    // invertir frase normal
    $invertido = strrev($texto);

    echo "<h3>Frase invertida:</h3>";
    echo $invertido;
    echo "<br><br>";

    /* limpiar texto para verificar palindromo */
    $textoLimpio = strtolower($texto);
    $textoLimpio = str_replace(" ", "", $textoLimpio);

    $reversa = strrev($textoLimpio);

    if ($textoLimpio == $reversa) {
        echo "<h3>Es un palindromo</h3>";
    } else {
        echo "<h3>No es un palindromo</h3>";
    }}

?>