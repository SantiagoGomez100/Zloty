

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
                    <th class="tables2" scope="col">Password</th>
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
                        <td class="tables2"><?php echo $fila['password']; ?></td>
                        <td><a id="colorbuttom" class="btn btn-outline-primary" href="frmpersonaeliminar.php?cod=<?php
                        echo $fila['idUsuario']; ?>">Eliminar</a></td>
                        <td><a id="colorbuttom" class="btn btn-outline-primary" href="frmpersonamodificar.php?idUsuario=<?php
                        echo $fila['idUsuario']; ?>">Modificar</a></td>
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
                    <th class="tables2" scope="col">Password</th>
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
                        <td class="tables2"><?php echo $fila['password']; ?></td>
                        <!-- <td><a id="colorbuttom" class="btn btn-outline-primary" href="frmpersonaeliminar.php?cod=<?php
                        echo $fila['idUsuario']; ?>">Eliminar</a></td>
                        <td><a id="colorbuttom" class="btn btn-outline-primary" href="frmpersonamodificar.php?idUsuario=<?php
                        echo $fila['idUsuario']; ?>">Modificar</a></td> -->

                        <td>
                        <!-- Trigger the modal with a button -->
                            <button type="button" id="colorbuttom" class="btn btn-primary" data-toggle="modal" data-target="#modificaradmin"
                                    onclick="
                                    <?php $idUsuario = $_REQUEST['idUsuario']; $mod = new Administrador(); $matrizmod = $mod->get_administrador1($idAdmin); ?>">
                                Modificar
                            </button>

                        <!-- Modal -->
                            <div class="modal fade" id="modificaradmin" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modificar Usuario</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <tr>
                                            <p class="texto2">Código:</td><br>
                                            <input name="codigo" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['idUsuario']  ?>" disabled readonly/></td>
                                        </tr>
                                        <tr>
                                            <p class="texto2">Nombre:</td><br>
                                            <input name="nombre" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['nombreo']  ?>" /></td>
                                        </tr>
                                        <tr>
                                            <p class="texto2">Apellido:</td><br>
                                            <input name="apellido" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['apellido']  ?>"/></td>
                                        </tr>
                                        <tr>
                                            <p class="texto2">Nick:</td><br>
                                            <input name="nick" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['nick']  ?>" /></td>
                                        </tr>
                                        <tr>
                                            <p class="texto2">Email:</td><br>
                                            <input name="email" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['email']  ?>" /></td>
                                        </tr>
                                        <tr>
                                            <p class="texto2">Telefono:</td><br>
                                            <input name="telefono" type="text" class="form-control controls"
                                            value="<?php echo $matrizmod['telefono']  ?>" /></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" id="colorbuttom" class="btn btn-default" data-dismiss="modal" onclick="window.location='frmnuevapersona.php'">Guardar</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>

            </div>

</body>
</html>