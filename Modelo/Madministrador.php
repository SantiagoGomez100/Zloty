<?php

<<<<<<< HEAD
require_once "../Modelo/conectar.php";  
=======
require_once "../Modelo/conectar.php";
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
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
        $consulta = $this->conexion_db->query("SELECT * FROM gestionusuario WHERE idUsuario = '$idusuario'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->usuario[] = $filas;
        }
        $this->conexion_db->close();
        return $this->usuario;
    }
    public function eliminar_usuario($idUsuario)
    {
        $resultado = $this->conexion_db->query("DELETE FROM gestionusuario WHERE idUsuario = '$idUsuario'");

        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_usuario($idUsuario, $nombre, $apellido, $email, $telefono, $ciudad,$pass)
    {
        $resultado = $this->conexion_db->query("UPDATE gestionusuario SET  nombre='$nombre', apellido ='$apellido',  email = '$email', telefono= '$telefono', ciudad='$ciudad', password='$pass' WHERE idUsuario= '$idUsuario' ");        

        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_producto($idProducto,$nombre,$descripcion,$existencias,$categoria1,$estado1)
    {
        $resultado = $this->conexion_db->query("UPDATE gestionarproducto SET  nombreProducto='$nombre', descripcionProducto ='$descripcion',  Existencias = '$existencias', idCategoria= '$categoria1', idEstado ='$estado1' WHERE idProducto= '$idProducto' ");        

        $this->conexion_db->close();
        return $resultado;
    }
    public function eliminar_producto($idProducto){

        $resultado = $this->conexion_db->query("DELETE FROM intercambio WHERE idProducto = '$idProducto'");
        if ($resultado){
            $resultado = $this->conexion_db->query("DELETE FROM gestionarproducto WHERE idProducto = '$idProducto'");
        }
        $this->conexion_db->close();
        return $resultado;
    }


    //Parte Administrativa

    public function get_administrador()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionfundacion");
        while ($filas = $consulta->fetch_assoc()) {
            $this->administrador[] = $filas;
        }
        $this->conexion_db->close();
        return $this->administrador;
    }

    public function get_administrador1($idAdmin)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionfundacion WHERE idUsuario = '$idAdmin'");
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