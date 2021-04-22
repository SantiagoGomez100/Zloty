<?php
    require_once "../Modelo/conectar.php";
    // include "../Modelo/configuracion.php";
    require_once "../Modelo/mantenerSesion.php";
    require_once "../Modelo/Mproducto.php";
        $id = $_POST ['idUsuario'];
        $nombre = $_SESSION['nombre'];

        $producto = new ProductoModelo();
        $matrizproducto = $producto -> get_productoid($id);

    require_once "../Modelo/Madministrador.php";

        $idusuario = $id;
        $usuario = new Administrador();
        $matrizusuario = $usuario -> get_usuario1($idusuario);



    require_once "../Vista/php/reporte.php";

?>