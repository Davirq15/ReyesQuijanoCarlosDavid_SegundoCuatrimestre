<?php

if (isset($_GET['nombre']) && isset($_GET['salario']) && isset($_GET['horas'])) {

    $nombre = $_GET['nombre'];
    $salario_hora = (float)$_GET['salario'];
    $horas = (int)$_GET['horas'];

    // Salario base (primeras 40 horas)
    if ($horas <= 40) {
        $salario_base = $horas * $salario_hora;
        $horas_extra_pago = 0;
    } else {
        $salario_base = 40 * $salario_hora;
        $horas_extra = $horas - 40;
        $horas_extra_pago = $horas_extra * ($salario_hora * 2);
    }

    $total_bruto = $salario_base + $horas_extra_pago;

    $deducciones = $total_bruto * 0.15;

    $salario_neto = $total_bruto - $deducciones;

    echo "Empleado: " . $nombre . "<br><br>";
    echo "Salario base: $" . number_format($salario_base, 2) . "<br>";
    echo "Horas extras pagadas: $" . number_format($horas_extra_pago, 2) . "<br>";
    echo "Total bruto: $" . number_format($total_bruto, 2) . "<br>";
    echo "Deducciones (15%): $" . number_format($deducciones, 2) . "<br>";
    echo "Salario neto: $" . number_format($salario_neto, 2);

} else {
    echo "No se recibieron datos.";
}

?>