<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $name = filter_input(INPUT_POST, 'formName', FILTER_SANITIZE_SPECIAL_CHARS);
    $tel = filter_input(INPUT_POST, 'formTel', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'formEmail', FILTER_SANITIZE_SPECIAL_CHARS);
    $url = filter_input(INPUT_POST, 'formUrl', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST, 'formGender', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieRun = filter_input(INPUT_POST, 'formRun', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieRead = filter_input(INPUT_POST, 'formRead', FILTER_SANITIZE_SPECIAL_CHARS);
    $hobbieSwim = filter_input(INPUT_POST, 'formSwim', FILTER_SANITIZE_SPECIAL_CHARS);
    $nationality = filter_input(INPUT_POST, 'formNationality', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'formMessage', FILTER_SANITIZE_SPECIAL_CHARS);


    $isHobbieRead = $hobbieRead ? 'Si' : 'No';
    $isHobbieSwim = $hobbieSwim ? 'Si' : 'No';
    $isHobbieRun = $hobbieRun ? 'Si' : 'No';



    $comments       = '<div>  Nombre: '               . $name
                    . '<br /> Teléfono: '             . $tel
                    . '<br /> Correo Electrónico: '   . $email
                    . '<br /> Sitio Web: '            . $url
                    . '<br /> Sexo: '                 . $gender
                    . '<br /> Correr: '               . $isHobbieRun  
                    . '<br /> Leer: '                 . $isHobbieRead  
                    . '<br /> Nadar: '                . $isHobbieSwim 
                    . '<br /> Nacionalidad: '         . $nationality
                    . '<br /> Mensaje: '              . $message
                    . '</div>';

    require_once 'PHPMailerAutoload.php';
    $phpmailer = new PHPMailer();

    $phpmailer->IsHTML( TRUE );
    $phpmailer->ClearAddresses();
    $phpmailer->AddAddress( 'mv.ptcers@gmail.com', 'Michelle Villavicencio' );  // Correo del destinatario y nombre
    $phpmailer->addBCC( '' );                                           // Correo CC
    //$phpmailer->IsSMTP();
    $phpmailer->SMTPDebug  = 0;
    $phpmailer->CharSet    = 'UTF-8';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->Host       = 'smtp.gmail.com';                    // Servidor de correo saliente SMTP
    $phpmailer->Port       = 465;                                       // Puerto de correo saliente SMTP
    $phpmailer->Username   = 'nayelli.sangenis@gmail.com';                       // Usuario del correo electrónico
    $phpmailer->Password   = '$eduMac_1010*';                               // Contraseña del correo electrónico
    $phpmailer->From       = 'nayelli.sangenis@gmail.com';                       // From
    $phpmailer->FromName   = 'Datos Web';                              // From Name
    $phpmailer->Subject    = 'Contacto';                                // Subject
    $phpmailer->MsgHTML( $comments ); 


?>




<!doctype html>
<html lang="es">
<!-- IDIOMA ESPAÑOL -->

<head>
    <meta charset="UTF-8">
    <title> Formularios Web </title>
    <!-- primero librerias, depsues plugins, y al final main.css -->
    <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
    <div class="wrapper">
        <header class="header-page">
            <div class="container">
                <h1> Formularios </h1>
            </div>
        </header>




        <main class="main-page">
            <!--(section.section-page>h2{seccion $}+p>lorem50)*4-->
            <section class="section-page">
                <div class="container">

                <?php if ( $phpmailer->Send() ): ?>
                    <p>El correo electrónico se ha enviado</p><!-- HTML que se mostrará cuando el correo se envíe correctamente. -->
                 <?php else: ?>
                    <p class="error">Ocurrio un error al enviar los datos</p><!-- HTML en caso de error de envío. -->
                <?php endif; ?>
                    
                </div>
            </section>

        </main>

        <footer class="footer-page">
            <div class="container">
                <p> Todos los Derechos recervados | Michelle Villavicencio | 2017 </p>
            </div>
        </footer>

    </div>

</body>

</html>