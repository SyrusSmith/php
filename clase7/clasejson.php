<?php

    $request = "https://dev.digitalhouse.com/api/getcomisiones";

    $get_comisiones = file_get_contents($request);

    $get_comisiones_array = json_decode($get_comisiones, true);

    var_dump($get_comisiones_array);

?>