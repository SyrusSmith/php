<?php

    session_start();

    function dd($var)
    {
        echo"<pre>";
        die(var_dump($var));
        echo "</pre>";
    }

    function old($user_input)
    {
        if (isset($_POST["$user_input"])) {
            return $_POST["$user_input"];
        }
    }

    //////

    function validate($datos)
    {
        $errores = [];

        $username = trim($datos['username']);

        if($username == "") {
            $errores['username'] = "Capo, me dejaste vacio el username";
        } elseif(strlen($username) <= 3 ) {
            $errores['username'] = "El nombre de usuario debe tener minimo 4 caracteres";
        }

        $email = trim($datos['email']);

        if($datos['email'] == "") {
            $errores['email'] = "El mail es obligatorio titan"; 
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        if($datos['email'] == "") {
            $errores['email'] = "Capo el email no es valido";
        }

        if($datos['password'] == "") {
            $errores['password'] = "La password la dejaste vacia";
        } elseif (strlen($datos['password']) <= 5) {
            $errores['password'] = "Minimo 6 caracteres para la pass!";
        } elseif ($datos['password'] != $datos['cpassword']) {
            $errores['password'] = "Las contraseñas no coinciden";
        }

        if(!isset($datos['confirm'])) {
            $errores['confirm'] = "Aceptame los terminos y condiciones";
        }

        return $errores;
    }
    
    function createUser($datos)
    {
        $usuario = [
            'username' => $datos['username'],
            'email' => $datos['email'],
            'password' => password_hash($datos['password'], PASSWORD_DEFAULT)
        ];

        $usuario['id'] = idGenerate();

        return $usuario;
    }

    function idGenerate()
    {
        $file = file_get_contents('users.json');

        if($file == ""){
            return 1;
        }
        
        $users = explode(PHP_EOL, $file);
        array_pop($users);

        $lastUser = $users[count($users) - 1];
        $lastUser = json_decode($lastUser, true);

        return $lastUser["id"] + 1;

    }

    function saveUser($usuario) 
    {
        $jsonUser = json_encode($usuario);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    // 1 -Traer TODA la base
    // 2 - Buqueda por email
 
    function traerTodaLaBase()
    {
        $baseJson = file_get_contents('users.json');
        $users = explode(PHP_EOL, $baseJson);
        array_pop($users);

        foreach($users as $user) {
            $arrayUsers[] = json_decode($user, true);
        }
        return $arrayUsers;
    }

    function buscamePorEmail($email)
    {
        $arrayDeUsuariosTraidos = traerTodaLaBase();
        foreach($arrayDeUsuariosTraidos as $user) {
            if($user['email'] == $email) {
                return $user;
            }
        }
        return null;
    }

    function loginController(){
        if(isset($_SESSION['email'])){
            return true;
        } else {
            if (isset($_COOKIE['email'])) {
            $_SESSION['email'] = $_COOKIE['email'];
            return true;
        } else {
            return false;
        }
    }
}

function login(){
    $_SESSION['email'] = $usuario;
    setcookie($usuario, $usuario, time() + 3600, '/');
    header('location: perfil.php');
}

function logout(){
    session_start();
    session_destroy();
    setcookie('email', '', time() -1);
}