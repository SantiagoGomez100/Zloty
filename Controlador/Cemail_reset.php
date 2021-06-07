<?php
// enviar email para restablecer contraseña
$para  = $email; 

// título
$titulo = 'Recuperar contrasena';
$codigo = rand(10000,99999);
// mensaje
$mensaje = '
<html>
    <head>
    <title>Recuperar password</title>
    </head>
    <body>
        <h1>ZLOTY - FUNDACION BELLA FLOR</h1>
        <h3>'.$codigo.'</h3>
        <p><a href = "http://localhost/Zloty/Vista/php/frmRestablecer.php?email='.$email.'&token='.$token.'">Para restablecer su password clic aqui</a></p> 
       <div style= "text-align: center; background-color: #ccc;">
       <p><small>Si usted no realizo la solicitud por favor omitir este email</small></p>
       </div>
    </body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales

$cabeceras .= 'From: Zloty <Zloty@example.com>' . "\r\n";
$cabeceras .= 'Cc: '.$para . "\r\n";


// Enviarlo
$enviado = false;
if ( mail($para, $titulo, $mensaje, $cabeceras) ) {
    $enviado = true;
}


?>