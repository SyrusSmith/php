<?php

function validar($datos) {
    
    if (trim($datos['nombre']) == '') {
        $errores['nombre'] = "El nombre es obligatorio";
    }
    
    if (trim($datos['apellido']) == '') {
        $errores['apellido'] = "El apellido es obligatorio";
    }

    if(!is_numeric($datos['edad'])) {
        $errores['edad'] = "La edad debe ser numérica";
    }
    
    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Debe introducir un mail válido";
    }

return $errores;

}


?>