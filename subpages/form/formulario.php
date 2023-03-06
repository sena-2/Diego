<?php
    $fullname = $_POST['fullname'];
    $apellido = $_POST['apellido'];
    $ident = $_POST['ident'];
    $email = $_POST['email'];
    $tel = $tel['tel'];
    $observacion = $_POST['observacion'];
    $radio = $_POST['radio'];
    $check =$_POST['check'];


    $header = 'from: ' . $email . "\r\n";
    $header .= "X-Mialer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header = "content-Type: text/plain ";

    $message = "este mensaje fue enviado por: " .$fullname . "\r\n";
    $message .= "su email es: " . $email . "\r\n";
    $message .= "su apellido es: " . $apellido . "\r\n";
    $message .= "su telefono es : " . $tel . "\r\n";
    $message .= "opcion " . $radio . "\r\n";
    $message .= "opcion 2: " . $check . "\r\n";
    $message .= "mensaje: " .$_POST['message'] . "\r\n";




    mail($para, $asunto, utf8_decode($message),($header));

    header("location:index.html")

?>