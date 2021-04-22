 <!-- Editar -->
 <?php
        require_once "../Modelo/conectar.php";
        require_once "../Modelo/Mproducto.php";
        $idProducto = $fila['idProducto'];
        $Producto = new ProductoModelo();//llamada al metodo constructor
        $matrizProducto1 = $Producto -> get_producto1($idProducto); 
    ?>
    
    <div class="modal fade" id="editarProducto<?php echo $fila['idProducto']; ?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog ">
         <div class="modal-content bg-dark">            
             <div class="modal-header " >
                 <h5 class="modal-title titulos" id="exampleModalLabel">EDITAR PRODUCTO</h5>
                 <button type="button" class="btn-close " id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body p-4" >
                
                 <form
                     action="../Controlador/CmodificarProducto2.php?idProducto=<?php echo $matrizProducto1[0]['idProducto'];?>"
                     method="POST">
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Id</label>
                         <input type="text" class="form-label " id="exampleInputEmail1" name="idProducto"
                             value="<?php echo $matrizProducto1[0]['idProducto'];?>" aria-describedby="emailHelp" readonly>
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Nombre</label>
                         <input type="text" class="form-control" id="nombre" name="nombre"
                             aria-describedby="emailHelp" value="<?php echo $matrizProducto1[0]['nombreProducto'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Descripcion</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="descripcion" value="<?php echo $matrizProducto1[0]['descripcionProducto'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Existencias </label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="existencias" value="<?php echo $matrizProducto1[0]['Existencias'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Categoria </label>                         
                         <select name="categoria" class="form-control" placeholder="categoria del producto" method="post" >
                                <option value="">Seleccione</option>
                                <option value="Juguetes" >Juguetes
                                </option>
                                <option value="Accesorios">Accesorios</option>
                            </select>
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Estado </label>
                         <select name="estado" class="form-control" placeholder="estado del producto" method="post" >
                                <option value="">Seleccione</option>
                                <option value="Bueno" >Bueno</option>
                                <option value="Regular">Regular</option>
                            </select>>
                     </div>
                     
                      
                     <div class="modal-footer">
                        
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span
                                 class="glyphicon glyphicon-remove"></span> Cancel</button>
                         <button type="submit" name="editar" id="colornav" class="btn"><span
                                 class="glyphicon glyphicon-check"></span> Actualizar Ahora</a>
                     </div>
                     
                 </form>
             </div>
         </div>
     </div>
 </div>
            
 <!-- Borrar -->
 <div class="modal fade" id="delete_<?php echo $fila['idProducto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content bg-dark">
             <div class="modal-header">
             
                 <center>
                     <h4 class="modal-title titulos" id="myModalLabel">BORRAR USUARIO</h4>
                 </center>
                 <button type="button" class="btn-close" id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p class="text-center tables2">¿Esta seguro de Borrar el registro?</p>
                 <h2 class="text-center tables2"><?php echo $fila['nombreProducto'].' '; ?></h2>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                 <a href="../Controlador/Celiminarproducto.php?idProducto=<?php echo $fila['idProducto']; ?>" class="btn" id="colornav"><span class="glyphicon glyphicon-trash"></span> Si</a>
             </div>
         </div>
     </div>
 </div>