<?php

    include ("../conexion/conexion.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $numusu = 0;

    $consulta = "SELECT * FROM gestionusuario WHERE email = '$email'";
    $resultado = $conexion ->query($consulta);

    while ($fila = $resultado->fetch_assoc()) {
        if(password_verify($password, $fila['password']))
        {
            $numusu++;
        }
    }

    if ($numusu == 1){
        session_start();
        $_SESSION['usuario'] = $email;
        echo $_SESSION['usuario'];
        while($usuario = $resultado->fetch_assoc()){
            $_SESSION['usuario'] = $usuario['nombre'];
            $_SESSION['correo'] = $usuario['email'];
            echo $_SESSION['usuario'], $_SESSION['correo'];
            exit(0);
        }
        header("location: ../inicioLogueado/logueado.php");
    }
    else {
        echo'<script type="text/javascript">
            alert("Usuario o Contraseña erronea, por favor intentelo de nuevo.");
            location="iniciar-sesion.php";
            </script>';
    }

?>