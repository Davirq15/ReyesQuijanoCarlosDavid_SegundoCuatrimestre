<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $pesos = $_POST["pesos"];
    $dolar = $_POST["dolar"];
    $euro = $_POST["euro"];

    $dolares = $pesos / $dolar;
    $euros = $pesos / $euro;
    echo "Monto en pesos: $pesos <br>";
    echo "Dólares: ".number_format($dolares,2)."<br>";
    echo "Euros: ".number_format($euros,2)."<br><br>";

    echo "Con 100 pesos:<br>";
    echo "Dólares: ".number_format(100/$dolar,2)."<br>";
    echo "Euros: ".number_format(100/$euro,2);
    }

?>