<?php

    if(! isset($_SESSION["correo"])){
        session_unset();
        session_destroy();
        echo'<script type="text/javascript">
            alert("Debes iniciar sesion para ver esta pagina, Acceso totalemente denegado a usuarios comunes.");
            location="../Vista/php/iniciar_sesionadmin.php";
            </script>';
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="../Vista/css/admin1.css">
    <link rel="stylesheet" href="../Vista/css/admin2.css">
    <title>Sesión Administrador Usuario</title>
</head>

<body>

    <!--    TOP NAV START==================================-->
    <br>
    <div class="topnav">
        <span class="brand-logo"><a href="#"><img src="../Vista/img/LOGOsolito.png" width="20" height="20"> </a></span>
        <div class="topnav-right">
            <span id="colornav" class="social">
                <a href="#twitter"><i class="fas fa-user-ninja"></i></a>
                <a href="#fb"><i class="fas fa-bahai"></i></a>
                <a href="Ccerrar-sesion.php"><i class="fas fa-sign-out-alt"></i></a>
            </span>
        </div>
    </div>


    <nav id="colornav">
        <div class="menu-btn">
            <div class="line line--1"></div>
            <div class="line line--2"></div>
            <div class="line line--3"></div>
        </div>

        <div class="nav-links">
            <a href="Cprincipaladmin.php" class="link">Usuarios</a>
            <a href="Cdonacionesadmin.php" class="link">Donaciones</a>
            <a href="Cintercambiosadmin.php" class="link">Intercambios</a>
            <a href="Cestadisticasadmin.php" class="link">Estadisticas</a>
        </div>
    </nav>


    <section class="content-container">
        <div class="landing-content">
            <div class="landing-content-holder">

            </div>
        </div>
    </section>


    <script>
        var menuBtn = document.querySelector('.menu-btn');
        var nav = document.querySelector('nav');
        var lineOne = document.querySelector('nav .menu-btn .line--1');
        var lineTwo = document.querySelector('nav .menu-btn .line--2');
        var lineThree = document.querySelector('nav .menu-btn .line--3');
        var link = document.querySelector('nav .nav-links');
        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('nav-open');
            lineOne.classList.toggle('line-cross');
            lineTwo.classList.toggle('line-fade-out');
            lineThree.classList.toggle('line-cross');
            link.classList.toggle('fade-in');
        })
        
    </script>