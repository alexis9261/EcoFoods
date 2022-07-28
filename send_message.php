<?php

    $phone=$_GET['phone'];
 

    $visitor_name = "";
    $visitor_email = "";
    $email_title = "Solicitud de contacto - Sitio Web EcoFoods";
    $visitor_message = "";
     
    if(isset($_GET['name'])) {
      $visitor_name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_GET['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_GET['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_GET['message'])) {
        $visitor_message = htmlspecialchars($_GET['message']);
    }
     
    $mensaje = "Nombre: $visitor_name ---- Email: $visitor_email ---- Telefono: $phone ---- Mensaje: $visitor_message";
    $recipient = "sales@ecofoodsservices.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $mensaje, $headers)) {
        $respuesta=1;
        header("Location: index.php?m=$respuesta");
    } else {
        $respuesta=0;
        header("Location: index.php?m=$respuesta");
    }

 
?>