<?php
    require_once "../Modelo/mantenerSesion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Vista/css/principal.css">
    <link rel="icon" href="../Vista/img/LOGOsolito.png">
    

    <title>Zloty - Bienvenido Usuario</title>

</head>

<body style="background-color:#27292D;">

    <header>
    <!----------- menu principal --------- -->

    <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../imagenes/bigblanco.png" alt="" height="80px" width="160px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav nav-pills nav-fill">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <div class="i">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <a class="nav-link btn btn-link" href="../../InicioLogueado/logueado.php" style="color: #ffffff;">
                          Volver</a>
                    </li>
                </ul>
            </div>
            </ul>
        </div>
    </nav>
        
  <br>
  <div class="carousel-inner">      
            </div>

    <!-------- Cuadro que Acompaña el Carrusel ------------ -->

        <div class="contenedorletras" >
            <h1>Con Zloty intercambia o dona Productos de manera Rapida</h1>
            
        </div>

    <!---------smoon ola  de la pagina  ----- -->

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #27292D;"></path>
            </svg></div>
    </header>
    <div >
    <div >        
    <center>
        <h1 style =" color: orange; ">LISTADO DE PRODUCTOS</h1><br>
    <!-- <a href="Cnuevoproducto.php" style =" color: orange; ">NUEVO PRODUCTO</a> -->
    </center>
    
    <table class="table table-bordered" style =" color: white; ">
        <thead class="thead-dark">
            <tr>
            <th width="126" scope="col">IDPRODUCTO</th>
            <th width="126" scope="col">NOMBRE</th>
            <th width="126" scope="col">DESCRIPCION</th>
            <th width="145" scope="col">EXISTENCIAS</th>
            <th width="145" scope="col">CATEGORIA</th>
            <th width="145" scope="col">ESTADO</th>
            <th width="136" scope="col">MODIFICAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
              foreach ($matrizproducto as $fila) {
                ?>
                    <td><?php echo $fila['idProducto']; ?></td>       
                    <td><?php echo $fila['nombreProducto']; ?></td>
                    <td><?php echo $fila['descripcionProducto']; ?></td>
                    <td><?php echo $fila['Existencias']; ?></td>
                    <td><?php echo $fila['idCategoria']; ?></td>
                    <td><?php echo $fila['idEstado']; ?></td>
                    <td><a href="../Controlador/Cmodificarproducto.php?idProducto=<?php echo $fila['idProducto'];?>">Modificar</a></td>
                    
                    
            </tr> 
            <?php
            }
            ?>
        </tbody>
        </table>
        <a href="../../InicioLogueado/logueado.php">FINALIZAR</a>
    </div>  
    </div>  

        <!-------------- footer------------ -->

        <footer class="content-footer">

            <a href="https://www.facebook.com/fundacionbellaflor">
                <img src="../Vista/img/logoBellaFlor.png" alt="" width="190px" height="100px">
            </a>
            <div>
                <h2 class="titulo-final">&copy; Fundación Bella Flor | Grup-Zloty</h2>
                <div class="diseñotime">
                    <script src="../js/time.js"></script>
                </div>
                <a class="nav-link btn btn-link" href="php/EquipoZloty.php" id="boton"> Equipo Zloty </a>
            </div>

            <img src="../Vista/img/bigblanco.png" alt="" width="180px" height="100px">
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
