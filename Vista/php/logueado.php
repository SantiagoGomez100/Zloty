<?php
    /* @session_start(([
        'cookie_lifetime' => 86400,
    ]));  */

    session_start();

    if(! isset($_SESSION["correo"])){
        session_unset();
        session_destroy();
        echo'<script type="text/javascript">
            alert("Debes iniciar sesion para ver esta pagina.");
            location="../../index.php";
            </script>';
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/LOGOsolito.png">
    <link rel="stylesheet" href="../css/principal.css">

    <title>Zloty - Bienvenido <?php

        echo $_SESSION['nombre'];

    ?>
    </title>

</head>

<body style="background-color:#27292D;">

    <header>

        <!----------- menu principal --------- -->

        <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/bigblanco.png" alt="" height="80px" width="160px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav nav-pills nav-fill">
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item correrUsers">
                            <div class="i">
                                <i class="fas fa-bell"></i>
                            </div>
                            <a class="nav-link letracolor " href="../notificaciones/notificaciones.html" style="color: #ffffff;">
                                Notificaciones <span class="badge badge-light">0</span>
                                </a>
                        </li>
                        <li class="nav-item correrUsers">
                            <div class="i">
                            <i class="fas fa-border-style"></i>
                            </div>
                            <a class="nav-link letracolor " href="../../Controlador/Cproductosid.php" style="color: #ffffff;">
                                Tablas de productos</a>
                        </li>
                        <li class="nav-item correrUsers">
                            <div class="i">
                                <i class="fas fa-plus"></i>
                            </div>
                            <a class="nav-link letracolor " href="../../Controlador/Cdatos.php" style="color: #ffffff;">
                                Realizar Donación e Intercambio</a>
                        </li>
                        
                        <li class="nav-item correrUser">
                            <div class="i">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <a class="nav-link letracolor " href="../php/ModificarPerfil.php" style="color: #ffffff;">
                                <?php

                                echo $_SESSION['nombre'];

                                ?>
                            </a>
                        </li>
                        <li class="nav-item correrUser">
                            <div class="i">
                                <i class="fas fa-plus"></i>
                            </div>
                                <a class="nav-link letracolor " href="cerrar-sesion.php " style="color: #ffffff;">
                            Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
                </ul>
            </div>
        </nav>


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item height-carousel active">
                <img src="../img/carrusel1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item height-carousel">
                <img src="../img/carrusel2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item height-carousel">
                <img src="../img/carrusel3.jpg" class="d-block w-100" alt="...">
            </div>
            </div>
        </div>


    <!-------- Cuadro que Acompaña el Carrusel ------------ -->

        <div class="contenedorletras">
            <h1>Con Zloty intercambia o dona Productos de manera Rapida</h1>
            <h6>Puedes clasificar tus productos para una mayor busqueda a lo que tu necesites.</h6>
            <ul class="contenedorprincipal"><br>
            <li class="principal">
                <a class="colorprincipal" href="#"><i class="fas fa-thumbtack">    Categorias del Portafolio de Donaciones</i></a>
                <div class="submenu">
                    <ul class="primerocategoria">
                    <li class="segundocategoria"><a class="tercerocategoria" href="#">Electrodomesticos</a></li>
                    <li class="segundocategoria"><a class="tercerocategoria" href="#">Jugueteria</a></li>
                    <li class="segundocategoria"><a class="tercerocategoria" href="#">Accesorios para bebe</a></li>
                    <li class="segundocategoria"><a class="tercerocategoria" href="#">Implementos para el Hogar</a></li>
                    </ul>
                </div>
            </ul>
        </div>

    <!---------smoon ola  de la pagina  ----- -->

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #27292D;"></path>
            </svg></div>
    </header>

            <!-- Zona de Atencion al Cliente -->

            <div class="containerzonacliente">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
            id="atencioncliente">
                Quejas</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"
            id="atencioncliente">
                Reclamos</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"
            id="atencioncliente">
                Sugerencias</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enviar Mensaje a la Administración</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mensaje:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar Ventana</button>
                        <button type="button" class="btn btn-primary" id="colorboton">Enviar Mensaje</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>

    <!-- Tarjeta -->

    <div class= "container">
            <article class="cuadro">
                <img src="../img/mensajero.png" class="imagencuadro" alt="Equipo Zloty">
                <h3 class="titulocuadro">Zloty</h3>
                <p class="frasecuadro">Nuestro equipo cumpliendo con todas las espectativas de la Fundación Bella Flor, dando nuestra mejor
                    calidad y eficiencia a todo lo que se nos a sea aignado, tambien ayudando facilidades al cliente en todo lo que sea posible.
                </p>
            </article>
        <br>

    <!-- Seccion de Donaciones e Intercambio -->

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" id="colorletracollaje">
                            Donaciones e Intercambios en Proceso
                        </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="colorletracollaje">
                            Donaciones o Intercambios Cancelados
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    
                </div>
            </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="colorletracollaje">
                            Donaciones o Intercambios Realizados
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    
                </div>
            </div>
            </div>
        </div>

        <center><img src="../img/titulo2.png" alt="Equipo Zloty"></center>
    </div>

    <!--------- secccion del card ------------ -->
    <main>
        <section class="portafolio">
            <div class="contenedor">
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../img/cicla.jpg" alt="">
                        <div class="hover-galeria" data-toggle="modal" data-target=".cicla-modal-lg">

                            <p class="parrafodeimg">Bicicleta</p>
                        </div>
                        <div class="modal fade cicla-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="color: #ffffff; text-align: center;">Realiza tu
                                        intercambio </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label=>
                                        <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-content">
                                    <div class="row" style="padding: 7%;">
                                        <div class="col-md-6"><img style="margin-top: 40px;" src="./imagenes/cicla.jpg"
                                                alt=""></div>
                                        <div class="col-md-6 ml-auto">
                                            <h3>Bicicleta </h3>
                                            <div data-spy="scroll" data-target="#list-example" data-offset="0"
                                                class="scrollspy-example">
                                                <p><b>El marco</b>El marco de las bicicletas todoterreno es más grande y
                                                    ancho que el de una convencional.
                                                    <b>Ruedas</b>Son tres las ruedas, por tamaño, la de la bicicleta de
                                                    montaña. Las de 26 pulgadas son las convencionales, las elegidas
                                                    cuando
                                                    apenas se comienza a rodar; son para usar con moderación.

                                                </p>
                                            </div>
                                            <button type="submit" class="btn colorBoton mt-3">Intercambiar</button>
                                            <button type="button" class="btn colorBoton " data-container="body"
                                                data-toggle="popover" data-placement="bottom"
                                                data-content="Aun no has iniciado sesion!>">
                                                Intercambiar
                                            </button>


                                        </div>
                                        <a href="./inicioSesion/inicioSesion.html">inicia sesion Aquí</a>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="imagen-port">
                        <img src="../img/patines.jpg" alt="">
                        <div class="hover-galeria" data-toggle="modal" data-target=".patines-modal-lg">
                            <p class="parrafodeimg">Patines</p>
                            <div class="modal fade patines-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-header">
                                        <h5 class="modal-title" style="color: #ffffff; text-align: center;">Realiza tu
                                            intercambio </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label=>
                                            <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-content">
                                        <div class="row" style="padding: 7%;">
                                            <div class="col-md-6"><img style="margin-top: 40px;"
                                                    src="./imagenes/patines.jpg" alt=""></div>
                                            <div class="col-md-6 ml-auto">
                                                <h3>Patines</h3>
                                                <div data-spy="scroll" data-target="#list-example" data-offset="0"
                                                    class="scrollspy-example">
                                                    <p><b>El marco</b>El marco de las bicicletas todoterreno es más
                                                        grande y
                                                        ancho que el de una convencional.
                                                        <b>Ruedas</b>Son tres las ruedas, por tamaño, la de la bicicleta
                                                        de
                                                        montaña. Las de 26 pulgadas son las convencionales, las elegidas
                                                        cuando
                                                        apenas se comienza a rodar; son para usar con moderación.

                                                    </p>
                                                </div>
                                                <button type="submit" class="btn colorBoton mt-3">Intercambiar</button>
                                                <button type="button" class="btn colorBoton " data-container="body"
                                                    data-toggle="popover" data-placement="bottom"
                                                    data-content="Aun no has iniciado sesion!>">
                                                    Intercambiar
                                                </button>

                                            </div>
                                            <a href="./inicioSesion/inicioSesion.html">inicia sesion Aquí</a>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="imagen-port">
                        <img src="../img/mac.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Computadora Mac</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/escritorio.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Escritorio computador</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/equipo.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Equipo de sonido</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/perrohouse.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Casa para mascota</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/puerta.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Puerta de madera</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/cajon.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Closet</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/pantalla windos.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Pantalla LG</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/mueble.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Sofa</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/tablero.png" alt="">
                        <div class="hover-galeria">
                            <p>Tablero</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="../img/Classical_Guitar_two_views.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Guitarra</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Redes Sociales de la Fundacion -->

    <div class="container">

        <article class="cuadrofundacion">
                <p class="fundacion">Si desea donar su grano de arena a la Fundación aqui tiene sus Redes Sociales</p>
                <a class="iconos" href="https://www.facebook.com/fundacionbellaflor"><i class="fab fa-facebook"></i></a>
                <a class="iconos" href="https://twitter.com/bellaflortw"><i class="fab fa-twitter"></i></a>
                <a class="iconos" href="https://www.instagram.com/fundacion_bella_flor/"><i class="fab fa-instagram"></i></a>
        </article>
        <br><br>
    </div>

    <!-------------- footer------------ -->

    <footer class="content-footer">

        <a href="https://www.facebook.com/fundacionbellaflor">
            <img src="../img/logoBellaFlor.png" alt="" width="190px" height="100px">
        </a>
        <div>
            <h2 class="titulo-final">&copy; Fundación Bella Flor | Grup-Zloty</h2>
            <div class="diseñotime">
                <script src="../js/time.js"></script>
            </div>
        </div>
        <img src="../img/bigblanco.png" alt="" width="180px" height="100px">
    </footer>

    <!------- js de bootstrap------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
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

    <!---- js de iconos---------------- -->
    <script src="https://kit.fontawesome.com/437f265f51.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <script>
        $(window).scroll(function () {
            if ($("#menu").offset().top > 190) {
                $("#menu").addClass("main");
            } else {
                $("#menu").removeClass("main");
            }
        });
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
</body>

</html>