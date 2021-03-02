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
            location="../../index.html";
            </script>';
        exit;
    }
?>