<?php
    // Cantidades
    $peso = 100;
    $dolar = 20;
    $euro = 15;

    // Tasas de conversión (ejemplo)
    $peso_a_dolar = 0.058;
    $dolar_a_euro = 0.92;
    $euro_a_libra = 0.86;
    $peso_a_euro = 0.053;

    // Conversiones
    $c1 = $peso * $peso_a_dolar;
    $c2 = $dolar * $dolar_a_euro;
    $c3 = $euro * $euro_a_libra;
    $c4 = $peso * $peso_a_euro;

    echo "Peso a Dólar: $c1 <br> Dólar a Euro: $c2 <br> Euro a Libra Esterlina: $c3 <br> Peso a Euro: $c4 <br>";
?>