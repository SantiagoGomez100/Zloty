<?php
	session_start();

$idUsuario = $_GET['idUsuario'];
require_once "../Modelo/conectar.php";
require_once "../Modelo/Madministrador.php";
    $Usuario = new Administrador();//llamada al metodo constructor
    $resultado = $Usuario -> eliminar_usuario($idUsuario);

    header('location: ../Controlador/Cprincipaladmin.php');

?>