<?php
echo "<h1> Programando con PHP</h1>";
echo "<h2> Programando con PHP</h2>";

$nombre = "Federico";
$edad = 26;
$sueldo = 75000.53;

var_dump($nombre, $edad, $sueldo);

echo "<hr>";

$num = 30;
echo $num;
echo "<br>";
$numdec = 30.3;
var_dump($numdec);
echo "<br>";
$nombre = "Nahuel";
$apellido = 'Di Biase';
echo $nombre . " " . $apellido . " tiene " . $num . " años";

$num = "Lihue";
$nombre = 30;

echo "<hr>";

$uno = "Tres";
$dos = "tristes";
$tres = "tigres";
$cuatro = "tragan";
$cinco = "trigo";
$seis = "en";
$siete = "un";
$ocho = "trigal";

echo $uno." ".$dos." ".$tres." ".$cuatro." ".$cinco." ".$seis." ".$siete." ".$ocho;

// echo "<hr>";

// $num1 = 44;
// $num2 = "78";
// $resultado = $num1 + $num2;
// echo $resultado;

echo "<hr>";

$miArray = [];
$miArray[0] = "Hola";
$miArray[1] = "Chau";

var_dump($miArray);

echo "<hr>";

$miArray = [];
$miArray = ["hola", "chau", 0, 42];
$miArray = [
	0 => "hola",
	1 => "chau",
	2 => 0,
	3 => 42
	]; //esto es más ordenado, aunque ambos cumplen la misma función

echo "<hr>";

$animales = ["tigre", "mono", "delfin", "elefante", "oruga"];

var_dump($animales);

$animales [] = "coatí";
$animales [] = "lemur";

echo "<pre>";
var_dump($animales);
echo "</pre>";

echo "<hr>";

echo "Me gustan los animales: ".$animales[0].", ".$animales[1].", ".$animales[2].", ".$animales[3].", ".$animales[4].", ".$animales[5].", ".$animales[6];

echo "<br>";
echo "<br>";

$animales [0] = "cangrejo";
var_dump($animales);

echo "<br>";

$animales [100] = "león";
var_dump($animales);

echo "<br>";

$animales [16] = "tiburón";
var_dump($animales);

echo "<hr>";

$auto = [
	marca => "Ford",
	modelo => "Mustang",
	color => "Rojo",
	anio => "1967",
	patente => "akb999"
	];
var_dump($auto);

echo "<br>";

$auto [0] = "Nahuel";
var_dump($auto);

echo "<br>";

$auto [14] = "La Caja";
var_dump($auto);

echo "<br>";

$auto [poliza] = "999/999";
var_dump($auto);

echo "<br>";

$auto [patente] = "999akb";
var_dump($auto);

echo "<br>";

$auto [0] = "Lihué";
var_dump($auto);

echo "<br>";
echo "<hr>";
echo "<br>";

$valor1 = 10;
$valor2 = 20;
$valor3 = $valor1+$valor2;
echo "El resultado es: ".$valor3;

echo "<br>";

$entero = 50;
$decimal = 67.9;
$suma = $entero+$decimal;
var_dump($suma);

echo "<br>";

$resta = $entero-$decimal;
var_dump($resta);

echo "<br>";

$multi = $entero*$decimal;
var_dump($multi);

echo "<br>";

$divi = $entero/$decimal;
var_dump($divi);

echo "<br>";

$res1 = (5+$entero).(0.6+$decimal);
var_dump($res1);

echo "<br>";

$resultado1 = (($entero*2)+$decimal)/($entero/2);
var_dump($resultado1);

echo "<br>";

?>

