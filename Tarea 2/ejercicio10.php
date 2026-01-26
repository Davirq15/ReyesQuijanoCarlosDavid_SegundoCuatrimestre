10.- Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.

<?php

echo("<br><br><br>");

$nombres = ["Ana", "David", "Eduardo", "Nicole", "Jose"];

foreach ($nombres as $nombre) {
    $primera_letra = strtolower($nombre[0]);
    if ($primera_letra == 'a' || $primera_letra == 'e' || $primera_letra == 'i' || $primera_letra == 'o' || $primera_letra == 'u') {
        echo $nombre . "<br>";
    }
}
?>