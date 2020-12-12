<?php
    $mainemail = 'axel.hstr@gmail.com';
    // Correo al que va a llegar el mensaje
    $name = $_POST['nombre'];
    $city = $_POST['ciudad'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde el sitio oficial de Rotten Pork";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
    
    mail($name, $city, $mail, $mensaje, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='contacto.php'\",1000)</script>";
?>