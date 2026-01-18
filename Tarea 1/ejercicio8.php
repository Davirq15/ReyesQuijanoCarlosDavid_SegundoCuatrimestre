//Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50
utilizando un ciclo y una condición.//

<?php

echo "<br><br><br>";

$numeros = [15, 38, 4, 72, 51, 48, 96, 20];

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > 50) {
            echo $numeros[$i] . "<br>";
        }
    }


?>