<?php

$dni = "33306761";
$nombre = "Nahuel";
$apellido = "Di Biase";

$dia = 6;
$monto = 56000;
$cuota = 7;
$porcentaje = 5;

$monto_total = 0;
$monto_cuota = 0;
$valor_cuota = [];

switch ($dia){
    case '1':
    $dia = "lunes";
    break;
    case '2':
    $dia = "martes";
    break;
    case '3':
    $dia = "miércoles";
    break;
    case '4':
    $dia = "jueves";
    break;
    case '5': 
    $dia = "viernes";
    break;
    case '6':
    $dia = "sábado";
    break;
    case '7':
    $dia = "domingo";
    break;
    default:
    echo "Tienes que elegir un valor entre 1 y 7";
    exit;
}

if ($monto<1000 || $monto>72000){
    echo "La empresa sólo tramita préstamos de entre $1000 y $72000";
    exit;
} else if ($cuota <3 || $cuota>36){
    echo "La empresa sólo tramita préstamos a saldar entre 3 y 36 cuotas";
    exit;
} else if ($porcentaje !=5 && $porcentaje != 10 && $porcentaje != 15 && $porcentaje != 20){
    echo "La empresa sólo otorga créditos a un porcentaje del 5%, 10%, 15% o 20%";
    exit;
}

$monto_total = ($monto*$porcentaje)/100;
$monto_total = $monto_total+$monto;
$monto_cuota = $monto_total/$cuota;

for ($i=1; $i<=$cuota ; $i++) { 
    $valor_cuota [$i] = $monto_cuota/*"El valor de la cuota será de $$monto_cuota"*/;
}

echo "Estimado: <strong>$nombre $apellido</strong>, en el día de hoy <strong>$dia</strong> se le aprobó el crédito de <strong>$$monto</strong>, a una tasa del <strong>$porcentaje%</strong>, por lo cual usted deberá cancelar un préstamo total de <strong>$$monto_total</strong>, a razón de <strong>$cuota</strong> cuotas, y el valor de cada cuota será de:";
echo "<br>";
echo "<br>";
echo "<hr>";

foreach ($valor_cuota as $key /*key muestra el número de la cuota, es un índice*/ => $value){
    echo "El valor de la cuota $key será de $$value";
    echo "<br>";
    echo "<hr>";
}

echo "<br>";
echo "Muchas gracias por utilizar nuestros servicios de préstamos OnLine";

?>