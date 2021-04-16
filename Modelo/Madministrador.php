<?php

require_once "../Modelo/conectar.php";
require_once "../Modelo/mantenerSesion.php";
class Administrador
{
    protected $conexion_db;

    private $usuario;

    public function __construct()
    {

        $this->conexion_db = Conectar::conexion();
        $this->usuario = array();
    }

    // Parte de Usuarios

    public function get_usuario()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionusuario");
        while ($filas = $consulta->fetch_assoc()) {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
    public function get_usuario1($idusuario)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionusuario WHERE idUsuario = '$idUsuario'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
    public function eliminar_usuario($idusuario)
    {
        $resultado = $this->conexion_db->query("DELETE FROM gestionusuario WHERE idUsuario = '$idusuario'");

        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_producto($idusuario, $nombre, $apellido, $email, $tel)
    {
        $resultado = $this->conexion_db->query("UPDATE gestionusuario SET  nombre='$nombre', apellido ='$apellido',  email = '$email', telefono= '$tel' WHERE idUsuario= '$idusuario' ");        

        $this->conexion_db->close();
        return $resultado;
    }


    //Parte Administrativa

    public function get_administrador()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM usuarioadministrador");
        while ($filas = $consulta->fetch_assoc()) {
            $this->administrador[] = $filas;
        }
        $this->conexion_db->close();
        return $this->administrador;
    }

    public function get_administrador1($idAdmin)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM usuarioadministrador WHERE idUsuario = '$idAdmin'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->administrador[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }

    //Parte de Productos

    public function get_donaciones()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionarproducto");
        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
}
?>