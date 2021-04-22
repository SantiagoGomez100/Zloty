<?php

require_once "../Modelo/conectar.php";
require_once "../Modelo/mantenerSesion.php";
class UsuarioModelo
{
    protected $conexion_db;

    private $usuario;

    public function __construct()
    {

        $this->conexion_db = Conectar::conexion();
        $this->usuario = array();
    }

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
        $consulta = $this->conexion_db->query("SELECT * FROM gestionusuario WHERE idUsuario = '$idusuario'");
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
    public function modificar_usuario($idusuario, $nombre, $apellido, $email, $tel)
    {
        $resultado = $this->conexion_db->query("UPDATE gestionusuario SET  nombre='$nombre', apellido ='$apellido',  email = '$email', telefono= '$tel' WHERE idUsuario= '$idusuario' ");        

        $this->conexion_db->close();
        return $resultado;
    }
}
?>