<?php

function hobbyValido($str1){
    if(strlen($str1) <= 15 && strlen($str1) >=3){
        return true;
    } else {
        exit;
    }
    echo "\n";
}

echo "\n";
echo "Hola Mundo";
echo "\n";
$nombre = readline ("Escriba su nombre: ");

echo "\n";
echo "Bienvenido $nombre";

echo "\n";
$edad = readline ("Ingrese su edad: ");
if ($edad >= 18){
    echo "Acceso autorizado";
    echo "\n";
} else {
    echo "Acceso denegado";
    echo "\n";
    echo "\n";
    exit;
}

echo "\n";
// $hobbies = [];
// $hobbies = readline ("Ingrese un hobby seguido de una ',' ");
// echo $hobbies;

// echo "\n";
// function hobbyValido ($hobbies){
//     foreach ($hobbies as $value) {
//         if ($hobbies >=3 && $hobbies <=15){
//             $hobbies = readline ("¿Usted confirma $hobbies[]")
//             if (($hobbies = readline)=false){
//                 exit;
//             }
//         }
//     }
// }

$hobbies = readline ("Ingrese un hobby seguido de una ',' ");
echo "\n";

$hobbiesarray = explode(", ", $hobbies);

foreach ($hobbiesarray as $hobbies) {
    if (hobbyValido($hobbies) == true){
        if (readline ("¿Usted confirma $hobbies?, [SI/NO]") == "SI"){
            $hobbiesValido[] = $hobbies;
        }
    }
    echo "\n";
}

$hobby = implode(", ", $hobbiesValido);

echo "$nombre \n";
echo "$edad \n";
echo "$hobby \n";
echo "\n";

?>