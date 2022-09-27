<?php
 
    $visitor_email = "";
    $email_title = "Solicitud de suscripcion - Sitio Web EcoFoods";
    $visitor_message = "Sucripcion al sitio web EcoFoods";
     
     
    if(isset($_GET['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_GET['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

     
    $mensaje = "Email: $visitor_email ---- Mensaje: $visitor_message";
    $recipient = "sales@ecofoodsservices.com";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(
        strpos($_GET['email'], '</a>') || 
        strpos($_GET['email'], '</') ||
        strpos($_GET['email'], 'http') ||
        strpos($_GET['email'], 'д')
    ){
        $respuesta=0;    
    }else{

        if(mail($recipient, $email_title, $mensaje, $headers)) {
            $respuesta=1;
        } else {
            $respuesta=0;
        }
    }
        
    header("Location: index.php?m=$respuesta");

 
?>

