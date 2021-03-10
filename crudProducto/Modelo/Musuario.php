<?php
/* @session_start(([
    'cookie_lifetime' => 86400,
]));

if(! isset($_SESSION["usuario"])){
    echo'<script type="text/javascript">
        alert("Debes iniciar sesion para ver esta pagina.");
        location="../../index.html";
        </script>';
    exit;
} */ 
require_once "../Modelo/conectar.php";
require_once "../Modelo/mantenerSesion.php";
class UsuarioModelo 
{
    protected $conexion_db; // almacenar conexión a la bd

    private $usuario; // almacenar los proveedor

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
}
?>