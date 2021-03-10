<?php

require_once('../conexion/conexion.php');
require_once('modifi.php');
session_start();

$id = $_SESSION['idUsuario']; 

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$cel = $_REQUEST['telefono'];
$ciudad = $_REQUEST['ciudad'];

    
    $grupo = new Usuario();
    $resultado = $grupo->modificar_usuario($id, $correo, $nombre, $apellido, $cel, $ciudad );

    $_SESSION['nombre'] = $nombre;

    if ($resultado)
    header ("location:../inicioLogueado/logueado.php");
    else
    echo "error al modificar ";

   ?>

