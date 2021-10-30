<?php

$nombre= $_POST["name"];
$mail= $_POST["email"];
$asunto= $_POST["subject"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["message"];

$fechadehoy=date('Y-m-d');

$destinatario = 'info@spot-solution.com'; 
$asunto = ''.$asunto.''; 
$mensaje=''.$mensaje.'';

$cuerpo = 'Telefono de Contacto:'.$telefono. '<br>' . $mensaje;

//para el envío en formato HTML 
//$headers = "MIME-Version: 1.0\r\n"; 
//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers = "From: ".$nombre." <".$mail.">\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
//,$headers
$bool=mail($destinatario,$asunto,$cuerpo,$headers); 

if($bool){
    header('Location: index.html');
}else{
    echo "Mensaje no enviado";
}


?>
