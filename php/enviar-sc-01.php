<?php
//Variables
@$nombre = addslashes($_POST["nombre"]);
@$telefono = addslashes($_POST["telf"]);
@$email = addslashes($_POST["email"]);
@$mensaje = addslashes($_POST["mensaje"]);

//Mensaje
@$mensaje=
"Quiero hacer la cartera Flores Tonos Romanticos Verdes\n\n
Nombre: $nombre\n\n
Teléfono: $telefono\n\n
E-mail: $email \n\n
Mensaje: $mensaje
";

//Cabecera
$cabeceras = "Responder a : $email";
$asunto = utf8_decode("Mensaje desde la página Web");
$email_to = "micartera@rochikahn.com";
$contenido = utf8_decode("$mensaje");
//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$headers )) {

//Confirmación mensaje Ok
die("Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted. Gracias.");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
?>