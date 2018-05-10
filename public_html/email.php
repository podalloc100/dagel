<?php

$email = $_POST['email'] ;
$message = $_POST['message'] ;
$apellido = $_POST['apellido'] ;
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];

//////////////////////////////////////////////////////////////////////////////////////////////

// Modificar: Username, Password, From, FromName, AddAddress, Subject y body

//////////////////////////////////////////////////////////////////////////////////////////////




require("class.phpmailer.php");

$mail=new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth=true;

$mail->Host="mail.dominio.com";

$mail->Username="contacto@dagel.com.ar"; // usuario correo remitente

$mail->Password="Dagel_2018"; // contrase�a correo remitente

$mail->Port=25;

$mail->From="contacto@dagel.com.ar"; // correo remitente

$mail->FromName="Dagel"; // nombre remitente

$mail->AddAddress("destinatario"); // destinatario

$mail->IsHTML(true);

$mail->Subject="Contacto via web";



$body.= nl2br("Nombre y Apellido: \n$nombre $apellido");

$body.= nl2br("\n\nCorreo:\n$email");

$body.= nl2br("\n\nTelefono:\n$telefono");

$body.= nl2br("\n\nEmpresa:\n$empresa");

$body.= nl2br("\n\nConsulta:\n$message");

$mail->Body=$body; // mensaje

$enviar = $mail->Send(); // envia el correo



if($enviar)
header("Location: http://www.google.com");
else{echo "Intentelo nuevamente...";}

?>
