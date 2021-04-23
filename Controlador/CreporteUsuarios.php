<?php
    require_once "../Modelo/conectar.php";
    // include "../Modelo/configuracion.php";
    require_once "../Modelo/mantenerSesion.php";
    require_once "../Modelo/Madministrador.php";
    
        $usuario = new Administrador();//llamada al metodo constructor
        $matrizusuario = $usuario -> get_usuario();
        

    require_once "../Vista/php/reporteUsers.php";

?>