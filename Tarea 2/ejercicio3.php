3.- Haz un programa que declare un arreglo de palabras y muestre solo las que tienen
más de 5 letras.

<?php

echo("<br><br><br>");

$palabras = ["computadora", "mesa", "carpeta", "aire", "trabajador"];

    foreach ($palabras as $palabra) {
    if (strlen($palabra) > 5) {
        echo $palabra . "<br>";
    }
}

?>