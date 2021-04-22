<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Vista/css/principal.css">
    <link rel="icon" href="../.Vista/img/LOGOsolito.png">
    

    <title>Zloty - Modificar Producto</title>

</head>
<body style="background-color:#27292D;">
<header>
    <!----------- menu principal --------- -->

    <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../Vista/img/bigblanco.png" alt="" height="80px" width="160px">
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
                        <a class="nav-link btn btn-link" href="../Vista/php/logueado.php" style="color: #ffffff;">
                          Volver</a>
                    </li>
                </ul>
            </div>
            </ul>
        </div>
    </nav>
        
  <br>



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
    <div class="container">
    <div class="row">
          <div class ="col">
            <img src="../Vista/img/cajon.jpg" alt="" width="70%" height="250px" style="margin-top: 10%; border-radius: 50%;">

            <form class="entrega">
            <div class="form-group">
                <label for="exampleFormControlFile1"></label>
                <input type="file" class="form-control-file">
            </div>
            </form>
            
          </div>
        <div class="col-7">
          <div class="justify-content-xs-center" id="tablaProducto">
              <div class="card-img-top">
              <form action="CactualizarProducto.php?idProducto=<?php echo $matrizProducto[0]['idProducto'];?>" method="post">
                <center>
                  <table class="table " style =" color: white;">
                    <tr>
                      <td>Codigo del Producto</td>
                      <td><label for="idProducto"></label>
                        <input type="text" name="idProducto" id="idProducto" value ="<?php echo $matrizProducto[0]['idProducto'];?>" readonly />
                      </td>
                    </tr>
                    <tr>
                      <td>Nombre del Producto</td>
                      <td><label for="nombreProducto"></label>
                        <input type="text" name="nombreProducto" id="nombreProducto" value ="<?php echo $matrizProducto[0]['nombreProducto'];?>" />
                      </td>
                    </tr>
                    <tr>
                      <td>Descripcion del Producto</td>
                      <td><label for="descripcionProducto"></label>
                        <input type="text" name="descripcionProducto" value ="<?php echo $matrizProducto[0]['descripcionProducto'];?>" />
                      </td>
                    </tr>
                    <tr>
                      <td>Existencias</td>
                      <td><label for="Existencias"></label>
                        <input type="text" name="Existencias" value ="<?php echo $matrizProducto[0]['Existencias'];?>" />
                      </td>
                    </tr>
                    <tr>
                      <td>Categoria</td>
                      <td>
                      <select name="cate_prod" class="form-control" placeholder="categoria del producto" method="post" >
                                <option value="">Seleccione</option>
                                <option value="Juguetes" >Juguetes
                                </option>
                                <option value="Accesorios">Accesorios</option>
                            </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Estado</td>
                      <td>
                      <select name="estado_prod" class="form-control" placeholder="estado del producto" method="post" >
                                <option value="">Seleccione</option>
                                <option value="Bueno" >Bueno</option>
                                <option value="Regular">Regular</option>
                            </select>
                      </td>
                    </tr>
                    
                      <tr>
                      <td>&nbsp;</td>
                      <td><input name="modificar" type="submit" id="modificar" value="modificar" /></td>
                    </tr>
                  </table>
                </center>
              </form>
              </div>
                
            </div>
          </div>
      </div>
    </div>
    <footer class="content-footer">

    <a href="https://www.facebook.com/fundacionbellaflor">
        <img src="../Vista/img/logoBellaFlor.png" alt="" width="190px" height="100px">
    </a>
    <div>
        
        <h2 class="titulo-final">&copy; Fundación Bella Flor | Grup-Zloty</h2>
        <div class="diseñotime">
            <script src="../Vista/js/time.js"></script>
        </div>
        <a class="nav-link btn btn-link" href="php/EquipoZloty.php" >  Equipo Zloty </a>
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
