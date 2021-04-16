<?php

        include ("../../Modelo/conexion.php");

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $cel = $_POST['numerocel'];
        $ciudad = $_POST['ciudad'];
        $password = $_POST['password'];
        $cpasword = $_POST['confirpassword'];

        $encriptado = password_hash($password, PASSWORD_DEFAULT,["cost"=> 5]);
        $consulta = "SELECT * FROM gestionusuario WHERE email = '$correo'";
        if($consulta == 1){
                echo'<script type="text/javascript">
                alert("Usuario ya esta registrado.");
                location="registro.php";
                </script>';
        }
        else{
                $sql = "INSERT INTO gestionusuario (nombre,apellido,email,telefono,ciudad,password) VALUES ('$nombre','$apellido','$correo','$cel','$ciudad','$encriptado');";
                $resultado = $conexion->query($sql);
                echo'<script type="text/javascript">
                        alert("Usuario a sido registrado exitosamente. Ya puedes iniciar Sesión");
                        location="../inicioSesion/iniciar-sesion.php";
                        </script>';
        }
?>