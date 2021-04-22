<?php
   

    require_once("../Modelo/conectar.php");
    require_once("../Modelo/Madministrador.php");
    // Llama a las tablas.
    $usuario = new Administrador();
    $matrizusuarios = $usuario->get_usuario();
    $admin = new Administrador();
    $matrizadmins = $admin->get_administrador();

    //Parte del Administrador.
    $idAdmin = $_SESSION['idUsuario'];

    $mod = new Administrador();
    $matrizmod = $mod->get_administrador1($idAdmin);

    include ("../Vista/php/modoAdministrador.php");
    include ("../Vista/php/usuarios_admin.php");

?>