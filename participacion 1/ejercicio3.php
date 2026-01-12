<?php
    // Datos de la persona
    $peso = 70; // kg
    $altura = 1.75; // metros

    //IMC
    $imc = $peso / ($altura * $altura);

    echo "Peso: $peso kg <br> Altura: $altura m <br> IMC: " . round($imc, 2) . "<br>";
?>