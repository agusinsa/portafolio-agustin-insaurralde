<?php 



$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$msj=$_POST['msj'];


 require '../phpmailer/enviar.php';


if($nombre=='' || $email=='' || $asunto=='' || $msj==''){
    echo json_encode('error');
}else{
    echo json_encode('mensaje_ok');
    $mail->send();
}

?>