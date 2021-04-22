<?php
require_once "../Modelo/mantenerSesion.php";

class ProductoModelo
{
    protected $conexion_db;

    private $producto;

    public function __construct()
    {

        $this->conexion_db = Conectar::conexion();
        $this->producto = array();
    }

    public function get_producto()
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionarproducto");

        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
    public function get_productoid($id)
    {
        $consulta = $this->conexion_db->query("SELECT inter.idProducto, gp.nombreProducto, gp.descripcionProducto, gp.Existencias, gp.idCategoria, gp.idEstado
        FROM intercambio as inter
        JOIN gestionarproducto as gp ON gp.idProducto= inter.idProducto WHERE idUsuario = '$id'");

        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }

    public function get_producto1($idProducto)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionarproducto WHERE idProducto = '$idProducto'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }

    public function insertar_producto($codigo_producto,$nombre,$descripcion,$cantidad,$fecha_entrada,$categoria,$estado,$idTipoIntercambio)
    {
        $resultado = $this->conexion_db->query("INSERT INTO gestionarproducto (idProducto, nombreProducto,descripcionProducto,existencias, idCategoria, idEstado) VALUES ('$codigo_producto','$nombre','$descripcion','$cantidad ','$categoria', '$estado');");
        $idusuario = $_SESSION['idUsuario'];
        
        if ($resultado) {
            $resultado =$this->conexion_db->query("INSERT INTO intercambio (idTipoIntercambio, idUsuario, idProducto, cantidad) VALUES ('$idTipoIntercambio','$idusuario', '$codigo_producto','$cantidad');"); 
            
        }

        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_producto($idProducto, $nombreProducto, $descripcionProducto, $existencias, $categoria, $estado)
    {
        $sql = "UPDATE gestionarproducto SET nombreProducto ='$nombreProducto', descripcionProducto ='$descripcionProducto',Existencias = $existencias ,  idCategoria = '$categoria', idEstado = '$estado' WHERE idProducto = '$idProducto';";

        $resultado = $this->conexion_db->query($sql);

        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar2_producto($idProducto, $nombreProducto, $descripcionProducto, $cantidadSelec)
    {
        $sql = "UPDATE gestionarproducto SET nombreProducto ='$nombreProducto', descripcionProducto ='$descripcionProducto',Existencias = Existencias - $cantidadSelec  WHERE idProducto = '$idProducto';";

        $resultado = $this->conexion_db->query($sql);

        $this->conexion_db->close();
        return $resultado;
    }
    public function eliminar_producto($doc)
    {
        $resultado = $this->conexion_db->query("DELETE FROM gestionarproducto WHERE idProducto = '$idProducto';");

        $this->conexion_db->close();
        return $resultado;
    }

}
?>