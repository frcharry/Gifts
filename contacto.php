<?php
//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$telefono= addslashes($_POST['telefono']);
@$empresa = addslashes($_POST['empresa']);
@$mensaje = addslashes($_POST['mensaje']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "gyp@giftspromotions.com.co"; 
$contenido = "$nombre ha enviado un mensaje desde la web www.giftspromotions.com.co\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Telefono: $telefono\n"
. "Empresa: $empresa\n"
. "Mensaje: $mensaje\n"
. "\n";

if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el mensaje se envía muestra una confirmación
die("Gracias, su mensaje ha sido enviado correctamente.");
}
else
{
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>
<script language="javascript">
window.location="Index.html";
</script>