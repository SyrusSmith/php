<?php 
//Este es mi archivo que posee las funciones que uso en mi programa
//Función que suma dos valores
function sumar($valor1,$valor2){
    return $valor1+$valor2;
}

//Función que busca en un array simple a ver si existe
//el usuario que semanda desde el html
function buscar($usuario){
    $personas =["andres","gonzalo","polito","rodo","daniel"];
    foreach ($personas as $id => $nombre) {
       if($nombre == $usuario) {
          return $id;
       }
   }
}
//Función para validar el usuario
function validar($usuariox){
    if(strlen($usuariox)==0){
        return "El campo usuario no lo puede dejar en blanco";
    }
}
//Función para validar el password del usuario
function clave ($clavex){
    if(strlen($clavex)==0){
        return "La clave no la puede dejar en blanco";
    }
    if(strlen($clavex)<4 || strlen($clavex)>6 ){
        return "El password no puede ser menor de 4, ni mayor de 6 digitos";
    }
}


?>


