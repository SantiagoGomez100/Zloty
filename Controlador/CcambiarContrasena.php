<?php

    include ("../Modelo/conexion.php");


    $email = $_POST["correo"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    
    if ($password1 == $password2){

        $encriptado = password_hash($password1, PASSWORD_DEFAULT,["cost"=> 5]);
        $sql = "UPDATE gestionusuario SET password = '$encriptado' WHERE email = '$email';";
        $resultado = $conexion->query($sql);
            echo'<script type="text/javascript">
            alert("El password ha sido actualizado");
            location="../Vista/php/iniciar-sesion.php";
            </script>';        
    }
    else {
        echo'<script type="text/javascript">
            alert("El password no coinside, vuelva a intentarlo");
            location="../Vista/php/frmNuevaContrasena.php";
            </script>'; 
    }


?>
