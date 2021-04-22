<?php

    require_once "../Modelo/conectar.php";
    require_once "../Modelo/mantenerSesion.php";


    require_once "../Modelo/Mproducto.php";
    require_once "../Modelo/Musuario.php";

        $idUsuario = $fila['idUsuario'];
        $usuario = new UsuarioModelo();//llamada al metodo constructor
        $matrizUsuario = $usuario -> get_usuario1($idUsuario);

    require "../Controlador/Cprincipaladmin.php";

?>