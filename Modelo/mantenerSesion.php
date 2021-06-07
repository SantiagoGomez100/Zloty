<?php

    session_start();

    if(! isset($_SESSION["correo"])){
        session_unset();
        session_destroy();
        echo'<script type="text/javascript">
            alert("Debes iniciar sesion para ver esta pagina.");
<<<<<<< HEAD
            location="../../index.php";
=======
            location="../../index.html";
>>>>>>> 992b040e81f206fe9e05e057a2719cdf54d4a159
            </script>';
        exit;
    }
?>