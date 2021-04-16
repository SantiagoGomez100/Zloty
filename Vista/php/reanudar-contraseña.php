<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title> Zloty - Olvidar contraseña</title>
    <link rel="stylesheet" href="../css/olvidarcontr.css">
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
                                    <img src="../img/bigblanco.png" alt="logoZloty" width="150px">
                                </div>
                            </section>
                            <section>
                                <h3 class=" letraImagen">Crea tu cuenta</h3>
                            </section>
                            <div class="textoicon">
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo">Hazlo en menos de 5 minutos</p>
                                </div>
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo">Intercambia lo que ya no utilizas </p>
                                </div>
                                <div>
                                    <i class="far fa-check-circle">
                                    </i>
                                    <p class="mensajeparrafo"> Dona tus cosas para ayudar a la naturaleza y a la
                                        humanidad</p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- div derecho imagen and texto  -->
                    <div class="col-lg-6  p-5 ">



                        <!-- titulo principal -->
                        <section>
                            <h1 class="tituloInicio">¿Haz olvidado tu contraseña?</h1>
                            <h3 class="noPreocupes">No te preocupes, son cosas que pasan</h3>
                            <h4 class="dinosEmail">Dinos tu email para que podamos enviarte un correo con las
                                instrucciones de cómo recuperarla.</h4>
                        </section>
                        <!-- formulario  -->
                        <form>

                            <!-- email -->
                            <div class="form-group  ml-5">
                                <label for="email" class="colorLabel">Email</label>
                                <input type="email" class="form-control inputPeque" id="correo"
                                    placeholder="nombre@gmail.com" required>
                            </div>



                            
                                <div class="form-row">
                                    <a href="inicioSesion.html"><i
                                            class="fas fa-arrow-left mt-4"></i></a>
                                    <a href="iniciar-sesion.php" class="olvidoContrase">Volver al inicio
                                    </a>
                                    <button type="submit" class="btn colorBoton ml-5 mt-3">
                                        <a href="../php/inicio.html"> Recuperar contraseña </a>
                                    </button>
                                </div>
                            

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