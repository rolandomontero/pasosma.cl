 <?php

    if (!empty($_REQUEST)) {
        $to      = 'info@pasosmedioambiente.cl';
        $subject = '# MENSAJE DE PAGINA #';

        $message  = "Nombre: " . $_REQUEST['nombre'] . "\r\n";
        $message .=  "email: " . $_REQUEST['email'] . "\r\n";
        $message .=  "Mensaje: " . "\r\n" . $_REQUEST['mensaje'] . "\r\n";
        if($_REQUEST['contactame']=='1') {
            $message .=  "Quiero que me contacten." . "\r\n";
        }
        $headers = 'From: info@pasosmedioambiente.cl' . "\r\n" .
            'Reply-To: cmayorga@pasosmedioambiente.cl' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);


        echo '200';
    } else {
        echo '400';
    }
