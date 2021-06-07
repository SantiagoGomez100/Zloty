<?php

include "../Modelo/conexion.php";

$email = $_POST['correo'];
$bytes = random_bytes(5);
$token = bin2hex($bytes);

include "Cemail_reset.php";


if ($enviado) {

    $conexion->query("INSERT INTO passwords (email,token,codigo) values ('$email','$token','$codigo')") or die($conexion->error);

    echo'<script type="text/javascript">
    alert("Verifica tu email para restablecer tu password.");
    location="../Vista/php/iniciar-sesion.php";
    </script>';
}

?>