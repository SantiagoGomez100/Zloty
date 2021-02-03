<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "dbzloty";

    try{
        //$conexion = new mysqli("localhost", "root", "", "dbzloty");
        $conexion = new mysqli($servidor,$usuario,$clave,$bd);

    } catch(Exception $e){
        die("error" . $e->getMessage());
        echo "Error en la línea: " . $e->getLine();
    }

?>