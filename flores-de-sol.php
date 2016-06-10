<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ROCHI KAHN</title>

<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

<!--================== 	ENLACE FUENTE (INICIA)  =====================-->

	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

<!--================== 	ENLACE FUENTE (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA ARTICULO" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tentacion-miniatura-1').on('click', function(){
				$('#tentacion-presentacion-1').show();
				$('#tentacion-presentacion-2').hide();
				$('#tentacion-presentacion-3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tentacion-miniatura-2').on('click', function(){
				$('#tentacion-presentacion-2').show();
				$('#tentacion-presentacion-1').hide();
				$('#tentacion-presentacion-3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tentacion-miniatura-3').on('click', function(){
				$('#tentacion-presentacion-3').show();
				$('#tentacion-presentacion-1').hide();
				$('#tentacion-presentacion-2').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA ARTICULO" (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "DETALLES CUIDADO Y ELABORACION" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas-detalles').on('click', function(){
				$('#cuidados-productos').slideDown();
				$('#mas-cuidados').hide();
				$('#menos-cuidados').show();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos-detalles').on('click', function(){
				$('#cuidados-productos').slideUp();
				$('#menos-cuidados').hide();
				$('#mas-cuidados').show();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas-detalles2').on('click', function(){
				$('#tiempo-elaboracion').slideDown();
				$('#mas-elaboracion').hide();
				$('#menos-elaboracion').show();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos-detalles2').on('click', function(){
				$('#tiempo-elaboracion').slideUp();
				$('#menos-elaboracion').hide();
				$('#mas-elaboracion').show();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "DETALLES CUIDADO Y ELABORACION" (TERMINA)  =====================-->

<!-- FAVICON-->



<link rel="apple-touch-icon" sizes="57x57" href="favicon/rk57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/rk60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/rk72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/rk76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/rk114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/rk120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/rk144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/rk152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/rk180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/rk192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/rk32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/rk96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/rk32.png">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/rk144.png">
<meta name="theme-color" content="#ffffff">

</head>

<body>
	<div class="contenedor">
		<header>
			<?php
				include 'menu.php'
			?>
		</header>
		
		<div class="contenedor-articulo">
			<div class="izquierda-articulo">
				<div class="presentacion-articulo">
					<img src="img/productos/viajera/cartera-rk-viajera-0004.jpg">
					<!-- <img id="tentacion-presentacion-2" style="display:none;" src="img/articulos/articulos2.jpg">
					<img id="tentacion-presentacion-3" style="display:none;" src="img/articulos/articulos3.jpg"> -->

				</div>
				<!--
				<div class="miniaturas-articulos">
					<a id="tentacion-miniatura-1" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0004.jpg"></a>
					<a id="tentacion-miniatura-2" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0004.jpg"></a>
					<a id="tentacion-miniatura-3" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0004.jpg"></a>
					<div class="clear"></div>
				</div>
				-->
				<div class="clear"></div>
				<div class="texto-articulos-izquierda">
					<p><br><br></p>
				</div>
				<!-- <div class="otros-articulos">
					<a href="flores-tonos-romanticos-verdes.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0001.jpg"></a>
					<a href="dorado-negro-italiano.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0002.jpg"></a>
					<a href="flores-encendidas-italiano.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0003.jpg"></a>
					<div class="clear"></div>
				</div> -->
				<a class="boton" href="javascript:history.back(-1);"><i class="fa fa-caret-left"></i>VOLVER</a>								
			</div>
			<div class="derecha-articulo">
				<p class="titulo-derecha-articulo">FLORES DE SOL</p>
				<div class="descripcion-articulo">
					<p>26 x 48 x 15 x 15 - 45 cm<br>
					(Alto x Largo x Ancho x Alto Asa Corta - Alto Asa Larga)<br><br>
					Brillante, alegre cuero italiano floreado evoca verano, juego de tonos naranjas amarillos y destellos de azules le dan la composicion perfecta para sonreir al llevarlo puesto.<br><br>
					- Cierre en boca principal.<br>
					- Asas cortas y asa larga.<br>
					- Salidas de asas en bronce italianas.<br>
					- Forro interior en tono color.<br>
					- 3 bolcillos internos, 1 con cierre.<br>
					- Placa marca bronce.</p>
					<p><span>S/ 1500 Soles</span></p>
					<div class="botones">
						<a href="#solicitar"><i class="fa fa-shopping-cart"></i>COMPRAR</a>
						<a href=""><i class="fa fa-scissors" aria-hidden="true"></i>HACER</a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-whatsapp"></i></a>
					</div> 
				</div>
				<div class="texto-articulo">
					<?php
						include 'cuidados-tiempo.php';
					?>	
					<a href=""><i class="fa fa-mobile"></i>(511) 985 047 810</a>
				</div>
				<div class="formulario-articulo" id="solicitar">
					<p>SOLICÍTALA AHORA.</p>
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
						<button id="send" class="btn btn-primary boton-enviar-2">ENVIAR</button>
						<!-- <input class="boton-enviar" type="submit" value="ENVIAR"> -->
					</form>
					<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
					<script type="text/javascript" src="js/bootstrap.min.js"></script>
					<script type="text/javascript" src="js/functions.js"></script>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<?php
			include 'pie-pagina2.php'
		?>
	</div>
</body>

</html>