<?php
//include ("../Modelo/mantenerSesion.php");

$idTipoIntercambio = 1;
$codigo_producto = $_POST['idProducto'];
$nombre = $_POST['nombre_prod'];
$descripcion = $_POST['desc_prod'];
$cantidad = $_POST['cantidad'];
$fecha_entrada = $_POST['fecha_entrada'];
$TipoEntrada = 'Donacion';
$categoria_desc = $_POST['cate_prod'];
$estado_desc = $_POST['estado_prod'];
    
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
    
    $resultado = $producto -> insertar_producto($codigo_producto,$nombre,$descripcion,$cantidad,$fecha_entrada,$TipoEntrada,$categoria,$estado,$idTipoIntercambio);
include "Cproducto.php";

?>