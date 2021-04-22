<?php
	session_start();

$idProducto = $_GET['idProducto'];
require_once "../Modelo/conectar.php";
require_once "../Modelo/Madministrador.php";
    $producto = new Administrador();//llamada al metodo constructor
    $resultado = $producto -> eliminar_producto($idProducto);

    header('location: ../Controlador/Cdonacionesadmin.php');

?>