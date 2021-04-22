<?php

    require_once ('../Modelo/conexion.php');
    require_once ('../Modelo/MmodificarPerfil.php');
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
    header ("location:../Vista/php/logueado.php");
    else
    echo "error al modificar ";

?>

