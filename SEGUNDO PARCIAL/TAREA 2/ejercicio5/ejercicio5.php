<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST["n"];

    for($i=1;$i<=$n;$i++){

    $espacios = str_repeat(" ",$n-$i);
    $asteriscos = str_repeat("*",(2*$i)-1);
    echo "<pre>$espacios$asteriscos</pre>";
    }

    $total = $n*$n;
    echo "<br>Total de asteriscos: $total";
    }

?>