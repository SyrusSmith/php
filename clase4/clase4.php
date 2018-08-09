<?php

echo "Hola Mundo";
echo "\n";
$nombre = readline ("Escriba su nombre: ");

echo "\n";
echo "Bienvenido $nombre";

echo "\n";
$edad = readline ("Ingrese su edad: ");
if ($edad >= 18){
    echo "Acceso autorizado";
} else {
    echo "Usted no posee autorización";
    exit;
}
echo "\n";

$hobbies = [];
$hobbies = readline ("Ingrese un hobbie seguido de una , ");
echo $hobbies;

echo "\n";

function hobbyValido ($hobbies){
    if ($hobby[] > 3 && < 15){
        
    }
}


?>