<?php
//Variables





@$nombre = addslashes($_POST["nombre"]);
@$telefono = addslashes($_POST["telf"]);
@$email = addslashes($_POST["email"]);
@$mensaje = addslashes($_POST["mensaje"]);

//Mensaje Recepción de Pedido
@$mensaje=
"Quiero hacer la cartera Dorado Y Negro Italiano\n\n
Nombre: $nombre\n\n
Teléfono: $telefono\n\n
E-mail: $email \n\n
Mensaje: $mensaje
";

//Mensaje Automático
@$contenido2=
"Hola ".$nombre ."\n\n
Estamos atendiendo tu pedido y/o consulta. En breve nos comunicaremos contigo.\n\n
ROCHI KAHN";


//Cabecera
$cabeceras = "Responder a : $email";

$asunto = utf8_encode("Mensaje desde la página Web");
$asunto2 = utf8_encode("Estamos atendiendo tu pedido y/o consulta");
$email_to = "micartera@rochikahn.com";
$contenido = utf8_encode("$mensaje");


$cabeceras2 = "Responder a : $email_to";
//Enviamos y resultados del mensaje

$contenido3 = utf8_encode("$contenido2");

if (@mail($email_to,utf8_decode($asunto) ,utf8_decode($contenido) , $cabeceras )) {



//Confirmación mensaje Ok
if (@mail($email,utf8_decode($asunto2) ,utf8_decode($contenido3) , $cabeceras2 )) {

//Confirmación mensaje Ok
die("Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted. Gracias.");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}





?>



