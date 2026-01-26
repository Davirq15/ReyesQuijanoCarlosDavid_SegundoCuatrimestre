6.- Haz un programa que declare una cadena y cuente cuántas vocales tiene.

<?php

echo("<br><br><br>");

$cadena = "patapim";
$vocales = 0;

    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($cadena[$i] == 'a' || $cadena[$i] == 'e' || $cadena[$i] == 'i' || $cadena[$i] == 'o' || $cadena[$i] == 'u') {
            $vocales++;
        }
    }

echo "Vocales en la cadena: " . $vocales;

?>