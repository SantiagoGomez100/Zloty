<?php

    if(!isset($msg)){
        $msg = "";
    }else{
    $msg = $_REQUEST['msg'];

    if($msg == 1){
        echo "Usuario ya registrado.";
    }
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title> Modo Administrador</title>
    <link rel="stylesheet" href="../css/inicioSesion.css">
    <link rel="shortcut icon" href="../img/LOGOsolito.png" type="image/x-icon">
</head>

<body>
    <main>
        <section>
            <!-- seccion de grid repartida en img y los inputs -->
            <div class="container divInterno">
                <div class="row">
                    <div class="col-lg-6  p-5 ">
                        <!-- parte del logo  -->
                        <section>
                            <div>
                                <img src="../img/bigblanco.png" alt="" width="150px">
                            </div>
                        </section>

                        <!-- titulo principal -->
                        <section>
                            <h1 class="tituloInicio">Inicio Sesión Administrativo</h1>
                        </section>
                        <!-- formulario  -->
                        <form action="iniciadorAdmin.php" method="post">
                            <!-- email -->
                            <div class="form-group mt-4">
                                <label for="Email" class="colorLabel">Email</label>
                                <input type="email" class="form-control inputPeque" id="correoinput" name="email" required>
                            </div>
                            <!-- contraseña -->
                            <div class="form-group mt-3">
                                <label for="password" class="colorLabel">Contraseña</label>
                                <input type="password" class="form-control inputPeque" name ="password" id="contrainput" required>
                            </div>
                            <!-- seccion de botones  -->
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <!-- iniciar -->
                                            <!-- <button type="submit" class="btn colorBoton mt-3"> -->
                                                <!-- <a href="../inicioLogueado/inicio.html">Inicio Sesión</a> -->
                                                <input type="submit" name="enviar" value="Enviar" class="btn colorBoton ml-5 mt-3">
                                            </button>
                                        </div>
                                        <!-- olvidarContraseña -->
                                        <div class="col-sm mt-3">
                                            <i class="fas fa-key"></i>
                                            <a href="reanudar-contraseña.php"
                                                class="olvidoContrase">olvidaste tu clave</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- flecha de regreso  -->
                            <a href="../../index.php"><i class="fas fa-arrow-left mt-4"></i></a>
                        </form>

                    </div>
                    <!-- div derecho imagen and texto  -->
                    <div class="imagen">
                        <div class="caption ">
                            <section>
                                <h3 class=" letraImagen">Entraste a modo Administador</h3>
                            </section>
                            <div class="textoicon">
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo"> No pasar la informacion a nadie</p>
                                </div>
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo"> Acceso denegado a Clientes de Zloty</p>
                                </div>
                            </div>
                            <button type="submit" class="btn colorRegistro mt-3"><a
                                    href="../../index.php"
                                    style="text-decoration: none; color:white">
                                    Pagina Principal</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        let correo = document.getElementById("correoinput");
        let contra = document.getElementById("contrainput");

        function validarLoguin() {
            if (correo.value === "user@gmail.com") {
                if (contra.value === "2067463") {
                    window.location.href = "";
                } else {
                    alert("contraseña incorrecta")
                }
            } else if (correo.value === "fundacion@gmail.com") {
                if (contra.value === "7905339") {
                    window.location.href = "";
                } else {
                    alert("contraseña incorrecta")
                }
            } else {
                alert('el usuario no existe')
            }
        }
    </script>

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