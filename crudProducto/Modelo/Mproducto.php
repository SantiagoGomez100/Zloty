<?php
include "../Modelo/mantenerSesion.php"; 
 
class ProductoModelo 
{
    protected $conexion_db; // almacenar conexión a la bd

    private $producto; // almacenar los proveedor

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
    
    public function get_producto1($idProducto)
    {
        $consulta = $this->conexion_db->query("SELECT * FROM gestionarproducto WHERE idProducto = '$idProducto'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->producto[] = $filas;
        }
        $this->conexion_db->close();
        return $this->producto;
    }
    
    public function insertar_producto($codigo_producto,$nombre,$descripcion,$cantidad,$fecha_entrada,$TipoEntrada,$categoria,$estado,$idTipoIntercambio)
    {        
        $resultado = $this->conexion_db->query("INSERT INTO gestionarproducto (idProducto, nombreProducto,descripcionProducto, idCategoria, idEstado) VALUES ('$codigo_producto','$nombre','$descripcion', '$categoria', '$estado');");
        $idusuario = $_SESSION['idUsuario'];
        if ($resultado) {
            
            $resultado =$this->conexion_db->query("INSERT INTO intercambio (idTipoIntercambio, idUsuario, idProducto, cantidad) VALUES ('$idTipoIntercambio','$idusuario', '$codigo_producto','$cantidad');"); 
             if ($resultado) {
                $consulta =$this->conexion_db->query("SELECT idIntercambio FROM intercambio WHERE idProducto = '$idProducto';"); 

                while ($filas = $consulta->fetch_assoc()) {
                    $consulta2 = $this->producto = $filas;
                    $resultado =$this->conexion_db->query("INSERT INTO entrada (fechaEntrada, tipoEntrada, idIntercambio, idUsuario, idProducto) VALUES ('$$fecha_entrada','$TipoEntrada','$consulta2','$idusuario', '$codigo_producto');"); 
                }
                                
            }  
        }  
                
        $this->conexion_db->close();
        return $resultado;
    }
    public function eliminar_producto($doc)
    {
        $resultado = $this->conexion_db->query("DELETE FROM gestionarproducto WHERE idProducto = '$idProducto'");        
        
        $this->conexion_db->close();
        return $resultado;
    }
    public function modificar_producto($idProducto, $nombreProducto, $descripcionProducto, $categoria, $estado_prod)
    {
        $resultado = $this->conexion_db->query("UPDATE gestionarproducto SET nombreProducto='$nombreProducto', descripcionProducto ='$descripcionProducto',  idCategoria = '$categoria', idEstado = '$estado_prod' WHERE idProducto= '$idProducto'");        
        
        $this->conexion_db->close();
        return $resultado;
    }
}
?>