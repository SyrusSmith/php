<?php

$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
$evalualicion = ["Regular", "Bueno", "Excelente"];
$aumento = 0;
$porcentaje = [10, 20, 30];
$sueldofinal = 0;

$nombre = "Nahuel";
$apellido = "Di Biase";
$dni = "12345678";
$sueldo = 10000;
$dia = 3;
$evalualiciones = 2;

if($evalualiciones[0]==$evalualicion){
    $aumento = $sueldo * ($porcentaje[$evalualicion]/100);}
elseif($evalualiciones[1]==$evalualicion){
    $aumento = $sueldo * ($porcentaje[$evalualicion]/100);}
elseif($evalualiciones[2]==$evalualicion){
    $aumento = $sueldo * ($porcentaje[$evalualicion]/100);}

$sueldofinal = $sueldo+$aumento;

echo "<h1>Estimado(a) $nombre $apellido, poseedor del DNI $dni, le informamos que el día de hoy $dias[$dia], de acuerdo al nivel de evalución obtenido de $evalualicion[$evalualiciones], usted ha recibido un aumento del $porcentaje[$evalualiciones]% siendo su aumento de $aumento y su nuevo sueldo es de $$sueldofinal</h1>";

?>