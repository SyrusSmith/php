<?php

echo "Ejercicio 2a";

echo "<br>";

function triangulo ($a, $b, $c){
    if ($c != null){
        $area = ($a + $b + $c)/2;
        echo "$area";
    } else { 
        $area = ($a * $b)/2;
        echo "$area";
    }
}

// triangulo (2, 4);

echo "<hr>";

echo "Ejercicio 2b";

echo "<br>";

function rectangulo ($a, $b){
    $area = $a * $b;
    echo $area;
}

rectangulo (5, 5);

echo "<hr>";

echo "Ejercicio 2c";

echo "<br>";

// function cuadrado

?>