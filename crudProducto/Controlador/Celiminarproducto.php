<?php
$doc = $_REQUEST['doc_prof'];
require_once "../Modelo/conectar.php";
include "../Modelo/Mprofesor.php";
    $profesor = new ProfesorModelo();//llamada al metodo constructor
    $resultado = $profesor -> eliminar_profesor($doc);
include "Cprofesor.php"; 
?>