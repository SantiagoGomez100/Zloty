<?php
    require_once "../Modelo/conectar.php";
    // include "../Modelo/configuracion.php";
    require_once "../Modelo/mantenerSesion.php";
    require_once "../Modelo/Mproducto.php";
        $producto = new ProductoModelo();//llamada al metodo constructor
        $matrizproducto = $producto -> get_producto();


    require_once "../Vista/php/listadoProducto.php";

?>