<?php
    $idProducto = $_REQUEST['idProducto'];
    //$nombre = $_POST['nombreProducto'];
    //$descripcion = $_POST['descripcionProducto'];
    //$cantidad = $_POST['Existencias'];
    //$cantidadTrueque = $_REQUEST['Existencias'];
    require_once "../Modelo/conectar.php";
    require_once "../Modelo/mantenerSesion.php";

    //$existencias =
    include "../Modelo/Mproducto.php";
    $producto = new ProductoModelo();//llamada al metodo constructor
    $matrizProducto = $producto-> get_producto1($idProducto);


    include "../Vista/html/frmIntercambiar.php";

?>