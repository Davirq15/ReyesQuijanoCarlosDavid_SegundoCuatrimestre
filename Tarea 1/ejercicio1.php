//Haz un programa que almacene el total de ventas de un día en una variable
y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayoro igual
a $5,000, o ventas bajas en caso contrario.

<?php

echo "<br><br><br>";

    $totalDeVentas = 2000;
    $buenDia = 5000;

    if($totalDeVentas >= $buenDia){
        echo "Buen día de venta!!<br>";
    }else{
        echo "Mal día de venta<br>";
    }

?>