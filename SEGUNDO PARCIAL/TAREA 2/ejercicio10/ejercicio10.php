<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tarjeta = $_POST["tarjeta"];

    if(strlen($tarjeta) == 16 && ctype_digit($tarjeta)){
    $formato = chunk_split($tarjeta,4," ");
    echo "Tarjeta: $formato <br>";
    $oculta = "**** **** **** ".substr($tarjeta,-4);
    echo "Oculta: $oculta";
    
    }else{
    echo "Número inválido";

    }}

?>