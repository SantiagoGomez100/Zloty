<?php
    require_once ("../Modelo/mantenerSesion.php");

    $intercambio = $_POST ['tipoIntercambio'];
<<<<<<< HEAD
    //$codigo_producto = $_POST['idProducto'];
=======
    $codigo_producto = $_POST['idProducto'];
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
    $nombre = $_POST['nombre_prod'];
    $descripcion = $_POST['desc_prod'];
    $cantidad = $_POST['cantidad'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $categoria_desc = $_POST['cate_prod'];
    $estado_desc = $_POST['estado_prod'];
    //$imagen = $_FILES['foto']['name'];
        if ($intercambio == 'Donacion') {
            $idTipoIntercambio = 1;
        }
        else {
            $idTipoIntercambio = 2;
        }
        if ($categoria_desc == 'Juguetes') {
            $categoria = 1;
        }
        else {
            $categoria = 2;
        }
        if ($estado_desc == 'Bueno') {
            $estado = 1;
        }
        else {
            $estado = 2;
        }


    /* $categoria = $_POST['cate_prod'];
    $estado = $_POST['estado_prod']; */
    include "../Modelo/conectar.php";
    include "../Modelo/Mproducto.php";
        $producto = new ProductoModelo();//llamada al metodo constructor

<<<<<<< HEAD
        $resultado = $producto -> insertar_producto($nombre,$descripcion,$cantidad,$fecha_entrada,$categoria,$estado,$idTipoIntercambio);
=======
        $resultado = $producto -> insertar_producto($codigo_producto,$nombre,$descripcion,$cantidad,$fecha_entrada,$categoria,$estado,$idTipoIntercambio);
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
    include "Cproducto.php";

?>