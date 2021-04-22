<?php

    require_once("../Modelo/conectar.php");
    require_once("../Modelo/Madministrador.php");
    $producto = new Administrador();
    $matrizproducto = $producto->get_donaciones();
    include("../Vista/php/modoAdministrador.php");
    include("../Vista/php/frmEstadisticas.php");
?>