<?php
    $idProducto = $_REQUEST['idProducto'];
    require_once "../Modelo/conectar.php";
    require_once "../Modelo/mantenerSesion.php";

    include "../Modelo/Mproducto.php";
        $producto = new ProductoModelo();
        $matrizProducto = $producto->get_producto1($idProducto);

    include "../Vista/php/frmModificarproducto.php";

?>