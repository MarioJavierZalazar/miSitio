<?php

$errores = '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Cargar nombre';
    }

    if(!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errores .= 'Cargar email valido';

    } else {
        $errores .= 'Cargar email';
    }


    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Cargar mensaje'
    }

    if (!$errores){
        $enviar_a = 'mariojavierzalazar@gmail.com';
        $asunto = 'Mensaje desde mi sitio';
        $mensaje_email = 'De: $nombre \n';
        $mensaje_email .= 'Correo: $correo \n';
        $mensaje_email .= 'Mensaje: ' . $mensaje;

        mail($enviar_a, $asunto, $mensaje_email)
    }
}
?>