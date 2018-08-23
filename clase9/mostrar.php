<?php

session_start();

if($_POST){
    if (isset($_POST['reiniciar']) || !isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
    }
    if (isset($_POST['incrementar'])) {
        $_SESSION['contador'] ++;
    }
}

echo $_SESSION['contador'];
echo "<br>";
echo "<br>";
echo "<a href=modificar.php>Volver</a>";

?>