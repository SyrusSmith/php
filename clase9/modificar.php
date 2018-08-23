<?php

session_start();

echo $_SESSION['contador'];

?>

<html>

<form action="mostrar.php" method="POST">
    <br>
    <input type="submit" name="incrementar" value="Incrementar">
    <input type="submit" name="reiniciar" value="Reiniciar">
</form>

</html>