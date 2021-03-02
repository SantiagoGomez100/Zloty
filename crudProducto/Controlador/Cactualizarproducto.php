<?php
$doc = $_REQUEST['doc_prof'];
$nom = $_REQUEST['nom_prof'];
$ape = $_REQUEST['ape_prof'];
$categoria = $_REQUEST['cate_prof'];
$salario = $_REQUEST['sal_prof'];

require_once "../Modelo/conectar.php";
include "../Modelo/Mprofesor.php";
    $profesor = new ProfesorModelo();//llamada al metodo constructor
    $resultado = $profesor -> modificar_producto($doc, $nom, $ape, $categoria, $salario);
include "Cprofesor.php"; 
?>