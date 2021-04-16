<?php

    require_once "../Modelo/conectar.php";
    require_once "../Modelo/mantenerSesion.php";

    // include "../Modelo/configuracion.php";
    require_once "../Modelo/Mproducto.php";
    require_once "../Modelo/Musuario.php";


    $usuario = new UsuarioModelo();//llamada al metodo constructor
    $matrizUsuario = $usuario -> get_usuario();

    require "../Vista/php/frmInsertarProducto.php";

?>