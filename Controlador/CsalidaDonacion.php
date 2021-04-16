<?php

    require_once "../Modelo/conectar.php";
    include "../Modelo/mantenerSesion.php";

    require_once "../Modelo/Mproducto.php";
    require_once "../Modelo/Musuario.php";


        $usuario = new UsuarioModelo();
        $matrizUsuario = $usuario -> get_usuario();

    require "../Vista/php/listadoProducto.php";

?>