 <!-- Editar cliente-->
    <?php
        require_once "../Modelo/conectar.php";
        require_once "../Modelo/Musuario.php";
        $idusuario = $fila['idUsuario'];
        $usuario = new UsuarioModelo();//llamada al metodo constructor
        $matrizUsuario1 = $usuario -> get_usuario1($idusuario); 
    ?>
    
    <div class="modal fade" id="editarUsuario<?php echo $fila['idUsuario']; ?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog ">
         <div class="modal-content bg-dark">            
             <div class="modal-header " >
                 <h5 class="modal-title titulos" id="exampleModalLabel">MODIFICAR USUARIO</h5>
                 <button type="button" class="btn-close " id="colornav" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body p-4" >
                
                 <form
                     action="../Controlador/CmodificarUsuario.php?idUsuario=<?php echo $matrizUsuario1[0]['idUsuario'];?>"
                     method="POST">
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Id</label>
                         <input type="text" class="form-label " id="exampleInputEmail1" name="idUsuario"
                             value="<?php echo $matrizUsuario1[0]['idUsuario'];?>" aria-describedby="emailHelp" readonly>
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Nombre</label>
                         <input type="text" class="form-control" id="nombre" name="nombre"
                             aria-describedby="emailHelp" value="<?php echo $matrizUsuario1[0]['nombre'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Apellido</label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="apellido" value="<?php echo $matrizUsuario1[0]['apellido'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Email </label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="<?php echo $matrizUsuario1[0]['email'];?>">
                     </div>
                     <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Telefono </label>
                         <input type="text" class="form-control" id="exampleInputPassword1" name="telefono" value="<?php echo $matrizUsuario1[0]['telefono'];?>">
                     </div>
                     <div class="mb-3">
                            <label for="exampleInputText" class="form-label tables2">Ciudad </label>
                            <select id="inputState" value="<?php echo $matrizUsuario[0]['ciudad'];?>" type="text"
                                name="ciudad" class="form-control controls">
                                <option selected>Bogotá D.C</option>
                                <option>Medellín</option>
                                <option>Calí</option>
                                <option>Barranquilla</option>
                                <option>Cartagena</option>
                                <option>Bucaramanga</option>
                                <option>Manizales</option>
                                <option>Pereira</option>
                                <option>Cúcuta</option>
                                <option>Ibagué</option>
                                <option>Valledupar</option>
                                <option>Boyáca</option>
                                <option>Pasto</option>
                                <option>Armenia</option>
                                <option>Villavicencio</option>
                                <option>Neiva</option>
                                <option>Popayán</option>
                                <option>Armenia</option>
                            </select>
                        </div>
                        <div class="mb-3">
                         <label for="exampleInputText" class="form-label tables2">Password </label>
                         <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                     </div>
                     <div class="modal-footer">
                         <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Guardar </button> -->
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
 <div class="modal fade" id="delete_<?php echo $fila['idUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                 <h2 class="text-center tables2"><?php echo $fila['nombre'].' '.$fila['apellido']; ?></h2>
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                 <a href="../Controlador/CeliminarUsuario.php?idUsuario=<?php echo $fila['idUsuario']; ?>" class="btn" id="colornav"><span class="glyphicon glyphicon-trash"></span> Si</a>
             </div>
         </div>
     </div>
 </div>