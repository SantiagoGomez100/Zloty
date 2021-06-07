<?php
    require_once "../Modelo/conectar.php";
<<<<<<< HEAD
    //require_once "../Modelo/MmantenerSesionAdmin.php";
    //require_once "../Modelo/mantenerSesion.php";
=======
    // include "../Modelo/configuracion.php";
    require_once "../Modelo/mantenerSesion.php";
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
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