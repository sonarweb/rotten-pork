<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['nombre'];
        $city = $_POST['ciudad'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['mensaje'];

        $mailTo = "axel.sanchez@rottenporkofficial.com";
        $headers = "From: ".$mailFrom;
        $txt = "Has recibido un e-mail de ".$name.".\n\n".$message;



        mail($mailTo, $name, $txt, $headers);
        header("Location: contacto.php?mailsend");

    }
?>