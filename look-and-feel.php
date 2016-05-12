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

<script type="text/javascript">
	$(document).ready(function(){
		$('#look-and-feel-mostrar').show();
	});
</script>

</head>

<body>
	<header>
		<?php
			include 'menu.php'
		?>
	</header>

	<div class="contenedor">
		<div class="contenedor-slider slider-productos">
			<div id="contenedor-slider">
				<div id="slider">
					<section>
						<img src="img/productos/slider-productos.jpg">
					</section>
					<section>
						<img src="img/productos/slider-productos2.jpg">
					</section>
					<section>
						<img src="img/productos/slider-productos3.jpg">
					</section>
				</div>
				<div id="indicadores"></div>		
			</div>
			<div id="btn-prev">
				<img src="img/slider/izquierda-rochikahn.gif">
			</div>
			<div id="btn-next">
				<img src="img/slider/derecha-rochikahn.gif">
			</div>
			<script src="js/slider.js"></script>
		</div>

		<div class="titulo-productos"><img class="img-productos-1"src="img/productos/linea-circulo.gif"><p class="p-productos">EDICIÓN LIMITADA</p><img class="img-productos-2" src="img/productos/circulo.gif"></div>

		<div class="contenedor-productos">
			<ul id="accordion" class="accordion">
				<li>
					<?php
						include 'carteras-seduce.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-peru.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-viajeras.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-princesa.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-look.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-versatil.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-intervenidas.php';
					?>
				</li>
				<li>
					<?php
						include 'carteras-petit.php';
					?>
				</li>
			</ul>
			<script src="js/acordion.js"></script>
		</div>

		<?php
			include 'pie-pagina.php'
		?>
	</div>

	
</body>

</html>