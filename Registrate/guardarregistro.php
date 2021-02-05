<?php

        include ("../conexion/conexion.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $cel = $_POST['numerocel'];
        $ciudad = $_POST['ciudad'];
        $password = $_POST['password'];
        $cpasword = $_POST['confirpassword'];

        $encriptado = password_hash($password, PASSWORD_DEFAULT,["cost"=> 5]);
        $consulta = "SELECT * FROM gestionusuario WHERE email = '$correo'";
        if($consulta){
            $msg = "El usuario ya esta registrado";
            echo "<script>alert('".$msg."'); </script>";
            header("location:../inicioSesion/iniciar-sesion.php?msg=1");
        }
        else{
                // creamos el insert, no incluir campo idUsuario es autonumerado
            $sql = "INSERT INTO gestionusuario (nombre,apellido,email,telefono,ciudad,password) VALUES ('$nombre','$apellido','$correo','$cel','$ciudad','$encriptado');";
            $resultado = $conexion->query($sql);

        // si se genera error mostrarlo
            if (mysqli_connect_errno() !=0)
            {
                echo "Error al insertar usuario" . mysqli_connect_errno() . " - " . mysqli_connect_error();
                exit(0);
            } else  {
                echo "usuario insertado correctamente";
                mysqli_close($conexion);
                header("location:../inicioSesion/iniciar-sesion.php");
            }
        }

?>