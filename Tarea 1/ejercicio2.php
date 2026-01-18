//Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado,
calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.//

<?php
echo "<br><br><br>";

$gastos = [200, 400, 150, 250, 50, 300, 100];
$total = 0;

    foreach ($gastos as $gasto) {
        $total = $total + $gasto;
    }
$promedio = $total / count($gastos);

echo "$total";
echo "<br><br>";
echo "$promedio";


?>