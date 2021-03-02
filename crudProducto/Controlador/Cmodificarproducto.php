<?php
$doc = $_REQUEST['doc_prof'];
require_once "../Modelo/conectar.php";
include "../Modelo/Mprofesor.php";
    $profesor = new ProfesorModelo();//llamada al metodo constructor
    $matrizProfesor = $profesor->get_profesor1($doc);
    //var_dump($matrizProfesor);
include "../Vista/html/encabezado1.php";
include "../Vista/html/frmModificarProfesor.php";
include "../Vista/html/piepagina.php";
  

?>