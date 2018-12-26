<?php
//Para que esto funcione tenemos que ir a php.ini y configurar:
//[mail function] concretamente el smto port 25 y el sendmail from
$nombre_origen ="Cristian"; //Nombre remitente
$email_origen ="kristian_petrov@msn.com"; //Email remitente
$email_copia =""; //Direccion para guardar $email_copia
$email_ocultos=""; //Para direcciones de correo ocultas
$email_destino="cristian.yourev@mdelmim.es"; //A quien va dirigido
$nombre_destinatario="Paco"; //Nombre destinatiario
$asunto="Probando correo PHP"; //Cabecera del mensaje
$mensaje="Funciona correctamente"; //Cuerpo del mensaje
$formato="html"; //si vacio lo manda como texto plano

//cabeceras
$headers="To: $nombre_destinatario <$email_destino>\r\n";
$headers.="From: $nombre_origen <$email_origen>\r\n";
$headers.= "Return-Path : <$email_origen> \r\n";
$headers.= "Reply-To: $email_origen\r\n";
$headers.= "Cc: $email_copia \r\n";
$headers.= "MIME-Version: 1.0 \r\n";

if($formato =="html")
{
  $headers .= "Content-Type: text/hmtl; charset-iso-8859-1 \r\n";
}
else {
  $headers .= "Content-Type; text/plain; charset-iso-8859-1 \n\r";
}
//si todo OK, enviar

if(@mail($email_destino,$asunto,$mensaje,$headers)){
echo "El correo se ha enviado correctamente";
}
else {
  echo "Error en el envio del correo";
}
 ?>
