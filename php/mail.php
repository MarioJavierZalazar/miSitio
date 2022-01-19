<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje_email = $_POST['mensaje'];

$para      = 'mariojavierzalazar@gmail.com';
$titulo    = 'Contacto por sitio web';
$mensaje   = $mensaje_email . "\r\n";
$cabeceras = 'From:'. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);


header("Location: ../index.html");
?>