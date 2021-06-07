<?php

require_once "../Modelo/conectar.php";
require_once "../Modelo/Madministrador.php";

$idProducto =  $_POST['idProducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$existencias = $_POST['existencias'];
$categoria =$_POST['categoria'];
$estado = $_POST['estado'];

if ($categoria == 'Juguetes') {
    $categoria1 = 1;
}
else {
    $categoria1 = 2;
}
if ($estado == 'Bueno') {
    $estado1 = 1;
}
else {
    $estado1 = 2;
}
    $producto = new Administrador();//llamada al metodo constructor
    $resultado = $producto-> modificar_producto($idProducto,$nombre,$descripcion,$existencias,$categoria1,$estado1);
    //var_dump($resultado);
    if ($resultado){
        header('location: ../Controlador/Cdonacionesadmin.php');
    }
    else {
        echo "error al modificar";
    }

?>