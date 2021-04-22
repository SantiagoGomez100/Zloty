

            <br><br>
                <div class="container">
                <h1 class="titulos">LISTADO DE USUARIOS REGISTRADOS</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th class="tables2" scope="col">Id</th>
                    <th class="tables2" scope="col">Nombre</th>
                    <th class="tables2" scope="col">Apellido</th>
                    <th class="tables2" scope="col">Direccion</th>
                    <th class="tables2" scope="col">Telefono</th>
                    <th class="tables2" scope="col">Ciudad</th>                    
                    <th class="tables2" scope="col">Acción</th>
                    <th class="tables2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    foreach ($matrizusuarios as $fila) {
                    ?>
                    <tr>
                        <td class="tables2"><?php echo $fila['idUsuario']; ?></td>
                        <td class="tables2"><?php echo $fila['nombre']; ?></td>
                        <td class="tables2"><?php echo $fila['apellido']; ?></td>
                        <td class="tables2"><?php echo $fila['email']; ?></td>
                        <td class="tables2"><?php echo $fila['telefono']; ?></td>
                        <td class="tables2"><?php echo $fila['ciudad']; ?></td>
                        
                        <td>
                            <a href="#editarUsuario<?php echo $fila['idUsuario']; ?>"   data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary"  ><span class="glyphicon glyphicon-edit"></span>Editar</a>
                            <a href="#delete_<?php echo $fila['idUsuario']; ?>"  data-bs-toggle="modal" id="colorbuttom" class="btn btn-primary" ><span class="glyphicon glyphicon-trash"></span>Borrar</a>
                        </td>
                        <?php
                            include('modalAdminUsuario.php');
                        ?>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>

            </div>

            <br><br><br>
            <div class="container">
                <h1 class="titulos">LISTADO DE ADMINISTRADORES ACTUALES</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th class="tables2" scope="col">Id</th>
                    <th class="tables2" scope="col">Nombre</th>
                    <th class="tables2" scope="col">Apellido</th>
                    <th class="tables2" scope="col">Nick</th>
                    <th class="tables2" scope="col">Email</th>
                    <th class="tables2" scope="col">Telefono</th>
                    <th class="tables2" scope="col">Acción</th>
                    <th class="tables2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    foreach ($matrizadmins as $fila) {
                    ?>
                    <tr>
                        <td class="tables2"><?php echo $fila['idUsuario']; ?></td>
                        <td class="tables2"><?php echo $fila['nombre']; ?></td>
                        <td class="tables2"><?php echo $fila['apellido']; ?></td>
                        <td class="tables2"><?php echo $fila['nick']; ?></td>
                        <td class="tables2"><?php echo $fila['email']; ?></td>
                        <td class="tables2"><?php echo $fila['numeroTelefono']; ?></td>


                        <td>
                        <!-- Trigger the modal with a button -->
                            <button type="button" id="colorbuttom" class="btn btn-primary" data-toggle="modal" data-target="#modificaradmin"
                                    onclick="
                                    <?php $idUsuario = $_REQUEST['idUsuario']; $mod = new Administrador(); $matrizmod = $mod->get_administrador1($idAdmin); ?>">
                                Modificar
                            </button>


                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>

            </div>
            <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
</body>
</html>