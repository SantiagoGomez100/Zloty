<?php
$idProducto = $_REQUEST['idProducto'];
require_once "../Modelo/conectar.php";
require_once "../Modelo/mantenerSesion.php";

include "../Modelo/Mproducto.php";
    $producto = new ProductoModelo();//llamada al metodo constructor
    $matrizProducto = $producto->get_producto1($idProducto);
    //var_dump($matrizProfesor);

include "../Vista/html/frmModificarproducto.php";

  

?>