<?php
?>

<div class="contacto"><a name="contacto"></a>
	<div class="titulo-contacto"><img class="img-contacto-1" src="img/contacto/linea-circulo4.gif"><p class="p-contacto">CONTÁCTANOS</p><img class="img-contacto-2" src="img/contacto/circulo.gif"></div>
	<div class="texto-contacto"><img src="img/contacto/linea-corta.gif"><p>NOS ENCANTARÍA SABER DE USTED</p></div>
	<div class="actualizaciones"><p>Síguenos en <a href="">Twitter</a>, <a href="">Facebook</a> o <a href="">Instagram +</a> para  más actualizaciones</p></div>
	<div class="formulario">
		<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="enviar.php">
			<div id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div><br>
			<label>NOMBRE</label><input name="nombre" id="nombre" type="text"><br>
			<div class="error" id="err-nombre">*Por favor introduce tu nombre*</div><br>
			<label>TELÉFONO</label><input name="telf" id="telefono" type="tel"><br>
			<div class="error" id="err-telefono">*Por favor introduce tu número teléfonico*</div><br>
			<label>EMAIL</label><input name="email" id="telefono" type="email"><br>
			<div class="error" id="err-email">*Por favor introduce tu e-mail*</div>
	       	<div class="error" id="err-emailvld">*El formato de E-mail no es valido*</div><br>
			<label>MENSAJE</label><textarea name="mensaje" id="mensaje" rows="4"></textarea><br>
			<div class="error" id="err-mensaje">*Por favor escribe un mensaje*</div><br>
			<div class="error" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
			<div class="error" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
			<div class="error" id="err-state"></div><br>
			<button id="send" class="btn btn-primary boton-enviar">ENVIAR</button>
			<!-- <input class="boton-enviar" type="submit" value="ENVIAR"> -->
		</form>
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</div>
</div>
<?php
	include 'pie-pagina2.php'
?>

<?php
?>