
            <br><br>
                <div class="container">
                <h1 class="titulos">LISTADO DE PRODUCTOS ACTUALMENTE</h1><br><br>
                <table class="table">
                <thead>
                    <tr>
                    <th class="tables2" scope="col">Id</th>
                    <th class="tables2" scope="col">NOMBRE PRODUCTO</th>
                    <th class="tables2" scope="col">DESCRIPCION</th>
                    <th class="tables2" scope="col">DEXISTENCIAS</th>
                    <th class="tables2" scope="col">CATEGORIA</th>
                    <th class="tables2" scope="col">ESTADO</th>
                    <th class="tables2" scope="col">Acción</th>
                    <th class="tables2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    foreach ($matrizproducto as $fila) {
                    ?>
                    <tr>
                        <td class="tables2"><?php echo $fila['idProducto']; ?></td>
                        <td class="tables2"><?php echo $fila['nombreProducto']; ?></td>
                        <td class="tables2"><?php echo $fila['descripcionProducto']; ?></td>
                        <td class="tables2"><?php echo $fila['Existencias']; ?></td>
                        <td class="tables2"><?php echo $fila['idCategoria']; ?></td>
                        <td class="tables2"><?php echo $fila['idEstado']; ?></td>
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

</body>
</html>