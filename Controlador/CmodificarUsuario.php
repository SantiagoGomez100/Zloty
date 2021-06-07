<?php

require_once "../Modelo/conectar.php";
require_once "..//Modelo/Madministrador.php";

$idUsuario =  $_POST['idUsuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono =$_POST['telefono'];
$ciudad = $_POST['ciudad'];
$password = $_POST['password'];

    $pass = password_hash($password, PASSWORD_DEFAULT,["cost"=> 5]);  

    $usuario = new Administrador();//llamada al metodo constructor
    $resultado = $usuario-> modificar_usuario($idUsuario,$nombre,$apellido,$email,$telefono,$ciudad,$pass);
    //var_dump($resultado);
    if ($resultado){
        header('location: ../Controlador/Cprincipaladmin.php');
    }
    else {
        echo "error al modificar";
    }

?>