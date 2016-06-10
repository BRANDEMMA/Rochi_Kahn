<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ROCHI KAHN - CARTERA - BOLSO FLORES TONOS ROMANTICOS VERDES</title>

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
				<div  class="presentacion-articulo">
					<img  id="tentacion-presentacion-1" src="img/productos/seduce-color/cartera-rk-seduce-color-0001-1.jpg" >
					<img  id="tentacion-presentacion-2" style="display:none;" src="img/productos/seduce-color/cartera-rk-seduce-color-0001-2.jpg">
					<img   id="tentacion-presentacion-3" style="display:none;" src="img/productos/seduce-color/cartera-rk-seduce-color-0001-3.jpg">
				</div>
				<div class="miniaturas-articulos">
					<a id="tentacion-miniatura-1" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0001-1.jpg"></a>
					<a id="tentacion-miniatura-2" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0001-2.jpg"></a>
					<a id="tentacion-miniatura-3" style="cursor:pointer;"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0001-3.jpg"></a>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<div class="texto-articulos-izquierda">
				<p>
					
					<br><br>
				</p>
				</div>
				<a class="boton" href="javascript:history.back(-1);"><i class="fa fa-caret-left"></i>VOLVER</a>								
			</div>
			<div class="derecha-articulo">
				<p class="titulo-derecha-articulo">FLORES Y TONOS ROMATICOS VERDES</p>
				<div class="descripcion-articulo">
					<p>
					35 x 28 x 15 x 20 cm<br>
					(Largo x Alto x Ancho x Alto Asas)<br><br>
					Inmaculados paños de cuero blanco en complicidad con cuero floreado en tonos, un romántico dúo de estación con sol.<br><br>
					- Broche imantado en bronce<br>
					- Doble asa para el hombro o mano<br>
					- Argollas redondas en bronce<br>
					- Forro interior tono hueso<br>
					- 3 bolcillos interinos, 1 con cierre.<br></p>
					<p><span>S/ 1000 Soles</span></p>
					<div class="botones">
						<a href="#solicitar"><i class="fa fa-shopping-cart"></i>COMPRAR</a>
						<a href=""><i class="fa fa-scissors" aria-hidden="true"></i>HACER</a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-whatsapp"></i></a>
					</div> 
				</div>
				<div class="texto-articulo">
					<div class="boton-mas-detalles" id="mas-cuidados"><a id="mas-detalles"><strong>Cuidados del Producto</strong> &nbsp;&nbsp;&nbsp;&nbsp;<img src="img/prensa/ver-mas.gif"></a></div>
					<div style="display:none;" class="boton-mas-detalles" id="menos-cuidados"><a id="menos-detalles"><strong>Cuidados del Producto</strong> &nbsp;&nbsp;&nbsp;&nbsp;<img src="img/prensa/ver-menos.gif"></a></div>
					<p style="display:none;" class="contenido-mostrar" id="cuidados-productos"><br>Todas y cada una de las carteras de Rochi Kahn son trabajadas por expertos artesanos utilizando refinados materiales, especialmente seleccionados por sus texturas, originalidad, colores y belleza. <br><br>
				Conservar la apariencia de las carteras en los cueros, telares, fibras, naturales y sus aplicaciones en piedra, madera, espejo entre otros, requiere ser tratados muy delicadamente.<br><br>
					<strong>- Guarde las carteras con cierto relleno y por separado, evite apilarlas.<br><br>
					- Evite contacto con el agua o cualquier otro líquido.
					- Evite la directa exposición a la luz y al calor.
					- Minimice las marcas en el cuero evitando rozar el producto contra superficies filosas o ásperas.<br><br>
					- Recuerde que cueros oscuros pueden desteñir si son rozados contra prendas de color claro y viceversa.<br><br>
					- Para limpiar este producto utilice un paño suave y seco.</strong>
				<br><br>

					</p>


					<div class="boton-mas-detalles" id="mas-elaboracion"><a id="mas-detalles2"><strong>Tiempo de elaboración</strong> &nbsp;&nbsp;&nbsp;&nbsp;<img src="img/prensa/ver-mas.gif"></a></div>
					<div style="display:none;" class="boton-mas-detalles" id="menos-elaboracion"><a id="menos-detalles2"><strong>Tiempo de elaboración</strong> &nbsp;&nbsp;&nbsp;&nbsp;<img src="img/prensa/ver-menos.gif"></a></div>
					<p style="display:none;" class="contenido-mostrar" id="tiempo-elaboracion"><br>Cada cartera muchas veces es única y todas pertenecen a ediciones limitadas y numeradas, por esta razón y la personalización de sus diseños en materiales de composición pueden tomar cierto tiempo de elaboración y producción. <br><br>
					<strong>Nuestro tiempo promedio son 20 días (puede ser antes o después) dependerá de la elección del material, el origen del mismo y el trabajo de su creación.</strong> <br><br>
					Esta información será más precisa en el momento de la elección que hagan nuestros clientes.</p>
					<br><br>

					
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