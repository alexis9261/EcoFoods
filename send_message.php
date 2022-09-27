<?php
    define('CLAVE', '6LdtCCshAAAAALCfGm_v0y19rBOmBTbGTONTiKjF');
    $token = $_GET['token'];
    $visitor_name    = "";
    $visitor_email   = "";
    $visitor_phone   = "";
    $email_title     = "Solicitud de contacto - Sitio Web EcoFoods";
    $visitor_message = "";

    //Recatpcha Google 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $datos   = json_decode($response, true);
    $score   = $datos['score'];
    $success = $datos['success'];

    if($score >= 0.9 && $success){    
        if(!isset($_GET['name']) && !isset($_GET['email']) && !isset($_GET['phone']) && !isset($_GET['message'])){
            // Faltan campos
            $respuesta=0;
        }else{

            if(
                strpos($_GET['name'], '</a>') || strpos($_GET['email'], '</a>') || strpos($_GET['phone'], '</a>') || strpos($_GET['message'], '</a>') || 
                strpos($_GET['name'], '</') || strpos($_GET['email'], '</') || strpos($_GET['phone'], '</') || strpos($_GET['message'], '</') ||
                strpos($_GET['name'], 'http') || strpos($_GET['email'], 'http') || strpos($_GET['phone'], 'http') || strpos($_GET['message'], 'http') ||
                strpos($_GET['name'], 'д') || strpos($_GET['email'], 'д') || strpos($_GET['phone'], 'д') || strpos($_GET['message'], 'д')
                ){
                // Tiene un enlace - malicioso
                $respuesta=0;
            }else{

                $visitor_name    = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
                $visitor_email   = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_GET['email']);
                $visitor_email   = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
                $visitor_message = htmlspecialchars($_GET['message']);
                $visitor_phone   = htmlspecialchars($_GET['phone']);
                 
                $mensaje   = "Nombre: $visitor_name ---- Email: $visitor_email ---- Telefono: $visitor_phone ---- Mensaje: $visitor_message";
                $recipient = "sales@ecofoodsservices.com";

                $headers  = 'MIME-Version: 1.0' . "\r\n"
                .'Content-type: text/html; charset=utf-8' . "\r\n"
                .'From: ' . $visitor_email . "\r\n";
                 
                if(mail($recipient, $email_title, $mensaje, $headers)) {
                    $respuesta=1;
                } else {
                    $respuesta=0;
                }
            }

        }
         
    }else{
        // Es un mensaje de robot google recatpcha
        $respuesta=0;

    }
    
    header("Location: index.php?m=$respuesta");

?>