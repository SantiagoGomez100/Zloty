<?php
    require_once "../Modelo/conectar.php";
<<<<<<< HEAD

    
=======
    // include "../Modelo/configuracion.php";
    require_once "../Modelo/mantenerSesion.php";
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
    require_once "../Modelo/Madministrador.php";
    
        $usuario = new Administrador();//llamada al metodo constructor
        $matrizusuario = $usuario -> get_usuario();
        

    require_once "../Vista/php/reporteUsers.php";

?>