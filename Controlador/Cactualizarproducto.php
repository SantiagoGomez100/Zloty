<?php

require_once "../Modelo/mantenerSesion.php";

include "../Modelo/conectar.php";
include "../Modelo/Mproducto.php";

$idProducto = $_REQUEST['idProducto'];
$nombreProducto = $_REQUEST['nombreProducto'];
$descripcionProducto = $_REQUEST['descripcionProducto'];
$existencias = $_REQUEST['Existencias'];
$categoria_desc = $_REQUEST['cate_prod'];
$estado_desc = $_REQUEST['estado_prod'];

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


    $producto = new ProductoModelo();
    $resultado = $producto-> modificar_producto($idProducto, $nombreProducto, $descripcionProducto,$existencias, $categoria, $estado);

    if ($resultado){
        header("location: ../Vista/php/logueado.php");
    }
    else {
        echo "error al modificar";
    }
?>