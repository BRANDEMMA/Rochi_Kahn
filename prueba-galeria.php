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

		<script src='js/jquery-1.8.3.min.js'></script>
	<script src='js/jquery.elevatezoom.js'></script>

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


			<img id="zoom_03"  id="img_01" src="img/productos/prueba/small/image1.png" data-zoom-image="img/productos/prueba/small/image1.jpg"/>

				<div id="gal1">
				 
				  <a href="#" data-image="img/productos/prueba/small/image1.png" data-zoom-image="img/productos/prueba/large/image1.jpg">
				    <img id="img_01" src="img/productos/prueba/small/image1.png" />
				  </a>

				  <a href="#" data-image="small/image2.jpg" data-zoom-image="large/image2.jpg">
				    <img id="img_01" src="thumb/image2.jpg" />
				  </a>

				  <a href="#" data-image="small/image3.jpg" data-zoom-image="large/image3.jpg">
				    <img id="img_01" src="thumb/image3.jpg" />
				  </a>

				  <a href="#" data-image="small/image4.jpg" data-zoom-image="large/image4.jpg">
				    <img id="img_01" src="thumb/image4.jpg" />
				  </a>

				</div>




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
					<p>* Texto que explica que la cara y la contrata cara nunca son iguales.</p>
					<p>COMPLETA LA COLECCIÓN</p>
				</div>
				<div class="otros-articulos">
					<a href="dorado-negro-italiano.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0002.jpg"></a>
					<a href="flores-encendidas-italiano.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0003.jpg"></a>
					<a href="flores-tonos-romanticos-rojos-azules.php"><img src="img/productos/seduce-color/cartera-rk-seduce-color-0004.jpg"></a>
					<div class="clear"></div>
				</div>
				<a class="boton" href="javascript:history.back(-1);"><i class="fa fa-caret-left"></i>VOLVER</a>								
			</div>
			<div class="derecha-articulo">
				<p class="titulo-derecha-articulo">FLORES Y TONOS ROMATICOS VERDES</p>
				<div class="descripcion-articulo">
					<p>35 x 28.0 x 15 y 20a(largo x alto x ancho y alto asas)<br>
					Inmaculados paños de cuero blanco en complicidad con cuero foreado en tonos, un romantico duo de estacion con sol.<br>
					Broche imantado en bronce<br>
					Doble asa para el hombro o mano<br>
					Argollas redondas en bronce<br>
					Forro interior tono hueso<br>
					3 bolcillos interinos, 1 con cierre.</p>
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
					<p>
						Cuidados del Producto.<br>
						Tiempo de elaboración.
					</p>
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

					<script>
					   



	$("#zoom_03").elevateZoom({constrainType:"height", constrainSize:274, zoomType: "lens", containLensZoom: true, gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: "active"}); 

			//pass the images to Fancybox
			$("#zoom_03").bind("click", function(e) {  
			  var ez =   $('#zoom_03').data('elevateZoom');	
				$.fancybox(ez.getGalleryList());
			  return false;
			});

					</script>

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