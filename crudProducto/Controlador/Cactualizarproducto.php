<?php
$idProducto = $_REQUEST['idProducto'];
$nombreProducto = $_REQUEST['nombreProducto'];
$descripcionProducto = $_REQUEST['descripcionProducto'];
$categoria = $_REQUEST['cate_prod'];
$estado_prod = $_REQUEST['estado_prod'];

require_once "../Modelo/conectar.php";
include "../Modelo/Mproducto.php";
    $producto = new ProductoModelo();//llamada al metodo constructor
    $resultado = $producto -> modificar_producto($idProducto, $nombreProducto, $descripcionProducto, $categoria, $estado_prod);
include "Cproducto.php"; 
?>