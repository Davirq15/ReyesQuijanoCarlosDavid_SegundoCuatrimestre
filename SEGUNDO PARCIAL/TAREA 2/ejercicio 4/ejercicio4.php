<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $edad = $_POST["edad"];
    $actividad = $_POST["actividad"];

    if($sexo == "hombre"){
    $tmb = 88.36 + (13.4*$peso) + (4.8*$altura) - (5.7*$edad);
    }else{
    $tmb = 447.6 + (9.2*$peso) + (3.1*$altura) - (4.3*$edad);
    }

    $calorias = round($tmb*$actividad,2);

    echo "Nombre: $nombre <br>";
    echo "Peso: $peso kg <br>";
    echo "Altura: $altura cm <br>";
    echo "Edad: $edad <br><br>";

    echo "TMB: $tmb <br>";
    echo "Calorías recomendadas: $calorias";

    }

?>