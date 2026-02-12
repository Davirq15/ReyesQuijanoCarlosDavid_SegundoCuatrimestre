Haz un programa que declare una frase y cuente las vocales.
<?php

echo("<br><br>");

$frase = "soy un sigma boy";
$vocales = 0;

    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == 'a' || $frase[$i] == 'e' || $frase[$i] == 'i' || $frase[$i] == 'o' || $frase[$i] == 'u') {
            $vocales++;
        }
    }
echo "La frase contiene $vocales vocales."; 

?>