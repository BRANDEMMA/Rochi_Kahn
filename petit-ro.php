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
		$('#petit-mostrar').show();
	});
</script>



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