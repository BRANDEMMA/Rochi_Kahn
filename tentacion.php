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
					<img id="tentacion-presentacion-1" src="img/articulos/articulos.jpg">
					<img id="tentacion-presentacion-2" style="display:none;" src="img/articulos/articulos2.jpg">
					<img id="tentacion-presentacion-3" style="display:none;" src="img/articulos/articulos3.jpg">
				</div>
				<div class="miniaturas-articulos">
					<a id="tentacion-miniatura-1" style="cursor:pointer;"><img src="img/articulos/articulos-tentacion-1.jpg"></a>
					<a id="tentacion-miniatura-2" style="cursor:pointer;"><img src="img/articulos/articulos-tentacion-2.jpg"></a>
					<a id="tentacion-miniatura-3" style="cursor:pointer;"><img src="img/articulos/articulos-tentacion-3.jpg"></a>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<div class="texto-articulos-izquierda">
					<p>* Texto que explica que la cara y la contrata cara nunca son iguales.</p>
					<p>COMPLETA LA COLECCIÓN</p>
				</div>
				<div class="otros-articulos">
					<a href=""><img src="img/articulos/articulos-tentacion-4.jpg"></a>
					<a href=""><img src="img/articulos/articulos-tentacion-5.jpg"></a>
					<a href=""><img src="img/articulos/articulos-tentacion-6.jpg"></a>
					<div class="clear"></div>
				</div>
				<a class="boton" href=""><i class="fa fa-caret-left"></i>VOLVER</a>								
			</div>
			<div class="derecha-articulo">
				<p class="titulo-derecha-articulo">TENTACIÓN</p>
				<div class="descripcion-articulo">
					<p>Descripción de la cartera materiales, MEDIDAS. Descripción de la cartera materiales. Descripción de la cartera materiales. Descripción de la cartera materiales. Descripción de la cartera materiales</p>
					<p><span>S/ 1530 Soles</span></p>
					<div class="botones">
						<a href=""><i class="fa fa-shopping-cart"></i>COMPRAR</a>
						<a href=""><i class="fa fa-share-alt"></i>COMPARTE</a>
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
				<div class="formulario-articulo">
					<p>SOLICÍTALA AHORA.</p>
					<form method="POST" action="enviar.php">
						<label>NOMBRE</label><input name="nombre" type="text" required><br><br>
						<label>TELÉFONO</label><input name="telf" type="tel" required><br><br>
						<label>EMAIL</label><input name="email" type="email" required><br><br>
						<label>MENSAJE</label><textarea name="mensj" rows="4" required></textarea><br><br>
						<input class="boton-enviar-2" type="submit" value="ENVIAR">
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<?php
			include 'pie-pagina.php'
		?>
	</div>
</body>

</html>