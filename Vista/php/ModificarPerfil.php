<?php
    require ('../../Modelo/conexion.php');
    require ("../../Modelo/MmodificarPerfil.php");
    session_start();

    $id = $_SESSION['idUsuario'];

    $lista = new Usuario();
    $matrizusuario = $lista->Consulta($id);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
  <meta name="author" content="JONATHAN SIERRA">
  <meta name="description"
    content="Se realiza un formulario donde trae los datos de la base de datos (adbzloty) se actualiza esta informacion desde el archivo modicar.php, el cual finlmente llama modifi.php donde se actualiza y cierra conexion.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../img/LOGOsolito.png">
  <link rel="stylesheet" href="../css/modificarPerfil.css">
  <title>Perfil</title>
</head>

<body>
  <nav id="menu" class="navbar navbar-expand-lg  bg-pink">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../img/bigblanco.png" alt="" width="150px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item correrUsers">
            <a class="nav-link letracolor " href="../inicioSesion.html"><i class="fas fa-bell"></i></a>
          </li>
          <li class="nav-item correrUsers">
            <a class="nav-link letracolor " href="../inicioSesion.html"><i class="fas fa-plus"></i></a>
          </li>
          <li class="nav-item correrUser">
            <a class="nav-link letracolor " href="../inicioSesion.html"><i class="fas fa-user-circle"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- inicio de grid -->

  <div class="container">
    <div class="row">
      <div class="col">

        <form action="imgeng.php" nctype="multipart/form-data" class="entrega">
          <div class="form-group">
            <!-- <label for="img" class="col-sm-2 control-label">Perfil</label> -->
            <div class="col-sm-10">
              <!-- <input type="file" class="form-control" id="img" name="img"> -->

              <?php
							$path = "imagenes/".$id;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($img = readdir($directorio))
								{
									if (!is_dir($img)){
										echo "<div data='".$path."/".$img."'><a href='".$path."/".$img."' title='casa'><span class='glyphicon glyphicon-picture'></span></a>";
										echo "$img <a href='#' class='delete' title='Ver Archivo Adjunto' ><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
										echo "<img src='imagenes/$id/$img' width='200' />";
									}
								}
							}

						?>

            </div>
        </form>
      </div>
      <form action="imageng.php" method="POST" class="entrega" enctype="multipart/form-data">
        <div class="form-group">

          <label for="img"></label>
          <div class="col-sm">

            <input type="file" name="img" id="img" accept="image/*" multiple="">
          </div>
          <button type="submit"> <a>Cambiar foto</a> </button>
        </div>
      </form>


      <div class="botoncierre">
        <a href="cerrar-sesion.php" class="cierresesion">Cerrar Sesion</a>
      </div>
    </div>


    <!-- actualizar datos formulario -->
    <div class="col-7">
      <form action="../../Controlador/CmodificarPerfil.php" method="POST">

        <div class="form-row contenedorCompleto">

          <div class="form-group col-md-10" style="margin-top: 10%;">
            <label for="inputAddress" style="color: white;">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="inputAddress" placeholder="Ingrese Nombre"
              value="<?php echo $matrizusuario[0]['nombre'];?>" autofocus required>
          </div>
          <div class="form-group col-md-10" ;>
            <label for="inputAddress" style="color: white;">Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="inputAddress" placeholder="Ingrese Apellido"
              value="<?php echo $matrizusuario[0]['apellido']; ?>" autofocus required>
          </div>


          <div class="form-group col-md-10">
            <label for="inputAddress" style="color: white;">Telefono de contacto:</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $matrizusuario[0]['telefono']; ?>"
              placeholder="30000000" required>
          </div>

          <div class="form-group col-md-10">
            <label for="inputAddress" style="color: white;">Ciudad:</label>
            <select id="inputState" type="text" name="ciudad" value="<?php echo $matrizusuario[0]['ciudad']; ?>"
              class="form-control controls">
              <option selected>Bogotá D.C</option>
              <option>Medellín</option>
              <option>Calí</option>
              <option>Barranquilla</option>
              <option>Cartagena</option>
              <option>Bucaramanga</option>
              <option>Manizales</option>
              <option>Pereira</option>
              <option>Cúcuta</option>
              <option>Tolima</option>
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
        <div class="container botones">
          <div class="row">
            <div class="col-sm">
              <button type="submit" class="btn colorBoton "> <a href="logueado.php"
                  style="text-decoration: none; color: white;">Confirmar Cambios</a> </button> </div>
            <div class="col-sm">
              <button type="submit" class="btn colorBoton  "><a href="logueado.php"
                  style="text-decoration: none; color: white;">Cancelar </a> </button> </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>


  <footer>
    <div class="content-foo">
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
    </div>
  </footer>

  <!------- js de bootstrap------------------- -->
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


  <script>
    $(window).scroll(function () {
      if ($("#menu").offset().top > 190) {
        $("#menu").addClass("main");
      } else {
        $("#menu").removeClass("main");
      }
    });
  </script>
</body>

</html>