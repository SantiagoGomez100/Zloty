<?php
    require_once "../Modelo/conectar.php";

    
    require_once "../Modelo/Madministrador.php";
    
        $usuario = new Administrador();//llamada al metodo constructor
        $matrizusuario = $usuario -> get_usuario();
        

    require_once "../Vista/php/reporteUsers.php";

?>