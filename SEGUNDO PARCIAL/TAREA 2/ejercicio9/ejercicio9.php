<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = strtolower($_POST["nombre"]);
    $ap1 = strtolower($_POST["ap1"]);
    $ap2 = strtolower($_POST["ap2"]);
    $anio = $_POST["anio"];

    echo "1: ".substr($nombre,0,1).$ap1."<br>";

    echo "2: ".$nombre.substr($anio,-2)."<br>";

    echo "3: ".$ap1.$ap2.substr($nombre,0,1)."<br>";

    echo "4: ".substr($nombre,0,1).substr($ap1,0,1).substr($ap2,0,1).$anio."<br>";

    $total = strlen($nombre.$ap1.$ap2);

    echo "5: ".strrev($ap1).$total;
    }

?>