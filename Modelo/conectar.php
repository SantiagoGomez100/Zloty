<?php
    require ('configuracion.php');
    //require_once ('mantenerSesion.php');
    class Conectar{

        public static function conexion(){


            try{
                //$conexion = new mysqli("localhost", "root", "", "dbzloty");
                $conexion = new mysqli(SERVIDOR,USUARIO,CLAVE,DBNOMBRE);

            } catch(Exception $e){
                die("error" . $e->getMessage());
                echo "Error en la línea: " . $e->getLine();
            }
            //echo "conexion exitosa";
            return $conexion;
        }
    }

?>