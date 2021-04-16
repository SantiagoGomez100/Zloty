<?php
class Usuario {

    protected $conexion;
    private $db;

    public function __construct()
    {
        $this->db = Conectar::conexion();
        $this->lista = array();
    }

    // Modificar usuario
    public function modificar_usuario($id, $correo, $nombre, $apellido, $cel, $ciudad)
    {
        $sql ="UPDATE gestionusuario SET nombre = '$nombre', apellido = '$apellido', telefono = '$cel', ciudad = '$ciudad' WHERE idUsuario = '$id'";
        $resul = $this->db->query($sql);
        $this->db->close();
        return $resul;
    }

    public function Consulta($id)
    {
        $consulta = $this->db->query("SELECT * FROM gestionusuario where idUsuario = '$id'");
        $filas = $consulta->fetch_assoc();
        $this->lista[] = $filas;
        $this->db->close();
        return $this->lista;
    }

        // imagen guardar
    public function img_valor($id)
    {
        $consulta = $this->db->query("SELECT MAX(id) as id_maximo from gestionusuario");
        $filas = $consulta->fetch_assoc();
        $this->lista[] = $filas;
        $this->db->close();
        return $this->lista;
    }



}


?>