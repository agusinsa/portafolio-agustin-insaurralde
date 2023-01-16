<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$msj=$_POST['msj'];

$body=<<<html
    <h1>Contacto desde Portafolio</h1>
    <p>De: $nombre / $email</p>
    <h2>Mensaje</h2>
    $msj
html;


    
    $mail=new PHPMailer();
   
 

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'agusinsa2412@gmail.com';                     
        $mail->Password   = 'efwtensckvvtlnvg';      
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;  
        
        $mail->setFrom($email);
        $mail->addAddress('agusinsa2412@gmail.com', 'Agustin');

    
        $mail->isHTML(true); //pasar mensaje a html
        $mail->Subject="Contacto Portafolio: $asunto"; 
        $mail->Body=$body;
        $mail->AltBody=strip_tags($body);// strip_tags elimina etiquetas html para mails sin formato HTML 
        


?>