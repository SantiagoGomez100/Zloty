<?php

    session_start();
    $_SESSION['usuario'] = $_POST["nombre"];

    echo $_SESSION['mensaje'];
    echo "<br>";
    echo  "La variable del metodo POST es: ".$_SESSION['usuario'];

?>