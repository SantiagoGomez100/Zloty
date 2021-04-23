<?php

require_once('../../Modelo/conexion.php');
require_once('modifi.php');
session_start();

$id = $_SESSION['idUsuario'];

$id_insert = $id;

if($_FILES["img"] ["error"]>0){
    echo "Error al cargar archivo";
    header ("location:ModificarPerfil.php");
}
else {
    $permitidos = array("image/png","image/jpeg" );
    $limite_kb = 1000;

    if (in_array($_FILES["img"]["type"], $permitidos) && $_FILES["img"]["size"] <= $limite_kb * 9024) {
        $ruta = 'imagenes/'.$id_insert.'/';
        $archivo = $ruta.$_FILES["img"]["name"];

        if (!file_exists($ruta)) {
            mkdir($ruta);
        }
        if (!file_exists($archivo)) {

            $resultado = @move_uploaded_file($_FILES["img"]["tmp_name"], $archivo);

            if ($resultado == 1) {
                header ("location:ModificarPerfil.php");
                $resultado = $img;
                |echo'<script type="text/javascript">
                        alert("Archivo Guardado");
                        header ("location:ModificarPerfil.php");
                        </script>';


            }

            else if($resultado ){
                $img = $_FILES["img"];


                unlink("imagenes/$id/$img");
            }
            else{

                header ("location:ModificarPerfil.php");
                echo'<script type="text/javascript">
                        alert("Error al guardar archivo");
                        location:"ModificarPerfil.php";
                        </script>';
            }
        }
            elseif (!file_exists($archivo)) {
                # code...
            }
                else{


                header ("location:ModificarPerfil.php");
                echo'<script type="text/javascript">
                            alert("Archivo ya existe");
                            location:"ModificarPerfil.php";
                            </script>';
                }
    }

    else{
        header ("location:ModificarPerfil.php");

        echo'<script type="text/javascript">
                        alert("Archivo no permitido o excede el tamaño");
                        location:"ModificarPerfil.php";
                        </script>';
    }

}


?>