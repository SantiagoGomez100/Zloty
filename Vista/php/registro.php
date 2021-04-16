<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title> Zloty - Registrate</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="shortcut icon" href="../img/LOGOsolito.png" type="image/x-icon">
</head>

<body>
    <main>
        <section>
            <!-- seccion de grid repartida en img y los inputs -->
            <div class="container divInterno">
                <div class="row">
                    <div class="imagen">
                        <div class="mt-5 ml-5">
                            <section>
                                <div>
                                    <img src="../img/bigblanco.png" alt="" width="150px">
                                </div>
                            </section>
                            <section>
                                <h3 class=" letraImagen">!No te has registrado!</h3>
                            </section>
                            <div class="textoicon">
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo"> Registrate </p>
                                </div>
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo"> Haz tus cambio o donaciones en menos de 5 min</p>
                                </div>
                            </div>
                            <button type="submit" class="btn colorRegistro mt-3"><a
                                    href="iniciar-sesion.php"
                                    style="text-decoration: none; color:white">
                                    inicia Sesion</a>
                            </button>

                        </div>


                    </div>

                    <!-- div derecho imagen and texto  -->
                    <div class="col-lg-6  p-5 ">
                        <!-- parte del logo  -->

                        <!-- titulo principal -->
                        <section>
                            <h1 class="tituloInicio">Registrate</h1>
                        </section>
                        <!-- formulario  -->
                        <form action="guardarregistro.php" method="post">
                            <div class="form-row">
                                <!-- nombre -->
                                <div class="form-group ml-5">
                                    <label for="nombre" class="colorLabel">Nombre</label>
                                    <input type="text" class="form-control inputPeque" name="nombre"
                                    id="nombre" placeholder="Nombre" required>
                                </div>
                                <!-- Apellido -->
                                <div class="form-group ml-4">
                                    <label for="Apellido" class="colorLabel">Apellido</label>
                                    <input type="text" class="form-control inputPeque" name="apellido"
                                    id="apellido" placeholder="Apellido" required>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="form-group  ml-5">
                                <label for="email" class="colorLabel">Email</label>
                                <input type="email" class="form-control inputPeque" name="correo"
                                id="correo" placeholder="nombre@gmail.com" required>
                            </div>
                            <!-- contacto -->
                            <div class="form-row">
                                <div class="form-group ml-5">
                                    <label for="numero" class="colorLabel">N. Contacto</label>
                                    <input type="text" class="form-control inputPeque" name="numerocel"
                                    id="numerocel" placeholder="32333333232" required>
                                </div>
                                <!-- ciudad -->
                                <div class="form-group col-md-4 ml-4">
                                    <label for="inputState" class="colorLabel">Ciudad</label>
                                    <select id="inputState" type="text" name="ciudad" class="form-control controls">
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
                            </div>
                            <!-- introduce la contraseña -->
                            <div class="form-row contenedorCompleto ml-5">
                                <div class="form-group mt-3 ">
                                    <label for="password" class="colorLabel">Introduce una contraseña</label>
                                    <input type="password" class="form-control inputPeque" id="password"
                                        placeholder="contraseña" name="password" required>
                                </div>
                                <div class="form-group mt-3 ml-3">
                                    <label for="password" class="colorLabel">Confirmar contraseña</label>
                                    <input type="password" class="form-control inputPeque" id="password"
                                        placeholder="contraseña" name="confirpassword" required>
                                </div>
                            </div>
                            <section class="contenedorCompletos ">
                                <input type="submit" name="enviar" value="Enviar" class="btn colorBoton ml-5 mt-3">
                                    <!-- <a href="../inicioLogueado/inicio.html"> Registrate! </a> -->
                                </input>
                            </section>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/iniciarSesion.js"></script>

</body>

</html>