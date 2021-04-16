<?php

    require_once "../Modelo/mantenerSesion.php";

    include "../Modelo/conectar.php";
    include "../Modelo/Mproducto.php";
    $cantidadSelec = 0;
    $idProducto = $_REQUEST['idProducto'];
    $nombreProducto = $_REQUEST['nombreProducto'];
    $descripcionProducto = $_REQUEST['descripcionProducto'];
    //$existencias = $_REQUEST['Existencias'];
    $cantidadSelec =$_REQUEST['cantidadSelec'];



    $producto = new ProductoModelo();
    $resultado = $producto-> modificar2_producto($idProducto, $nombreProducto, $descripcionProducto,$cantidadSelec);

    if ($resultado){
        header("location: ../Vista/php/logueado.php");

    }
    else {
        echo "error al modificar";
    }

?>