<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $base = $_POST["base"];
    $exp = $_POST["exp"];

    $suma = 0;

    for($i=1;$i<=$exp;$i++){

    $resultado = pow($base,$i);
    $suma += $resultado;

    if($resultado % 2 == 0){
    $tipo = "Par";
    }else{
    $tipo = "Impar";
    }
    echo "$base^$i = $resultado ($tipo)<br>";
    }

    echo "<br>Suma total: $suma";
    }

?>