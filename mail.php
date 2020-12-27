<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['nombre'];
        $subject = $_POST['asunto'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['mensaje'];

        $mailTo = "axel.sanchez@rottenporkofficial.com";
        $headers = "From: ".$mailFrom;
        $txt = "Has recibido un e-mail de ".$name.".\n\n".$message;



        mail($mailTo, $name, $txt, $headers);
        header("Location: contacto.php?mailsend");

    }


    // Ingresa tu clave secreta.....
define("RECAPTCHA_V3_SECRET_KEY", '6Lc23BUaAAAAAEroAhExFKPxof9Y3Pddya1AnYKq');

$token = $_POST['token'];
$action = $_POST['action'];
 
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_V3_SECRET_KEY, 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
 
// verificar la respuesta
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // Si entra aqui, es un humano, puedes procesar el formulario
	
} else {
    // Si entra aqui, es un robot....
	
}
?>