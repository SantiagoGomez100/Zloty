<?php

include "../Modelo/conexion.php";

date_default_timezone_set('America/Bogota');

$email = $_POST['correo'];
$codigo = $_POST['codigo'];
$token = $_POST['token'];

session_start();

$resultado = $conexion->query("SELECT * FROM passwords WHERE email = '$email' and token = '$token' and codigo = $codigo ") or die($conexion->error);

if (mysqli_num_rows($resultado)>0) {

    $fila = mysqli_fetch_row($resultado);
    $fecha = $fila[4];
    $fechaActual = date("Y-m-d H:i:s");
 
    $secons = strtotime($fechaActual) - strtotime($fecha);
    $minutos = $secons/60;

    $_SESSION['correo'] = $email;
    
    if($minutos  >30) {
        echo'<script type="text/javascript">
        alert("Token vencido ");
        location="../Vista/php/frmRecuperar-contrasena.php";
        </script>';  
    }
    else {
        header ("location: ../Vista/php/frmNuevaContrasena.php");
    }
    }
else {
    echo'<script type="text/javascript">
    alert("Codigo incorrecto. ");
    location="../index.php";
    </script>';
}

?>