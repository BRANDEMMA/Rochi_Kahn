<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ROCHI KAHN - Muestra Privada</title>

<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/lightbox.min.css">

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

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "CONSIDERACIONES GENERALES" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas2').on('click', function(){
				$('#consideraciones-generales').slideDown('slow');
				$('#ver-menos2').show();
				$('#ver-menos2').css({'display':'flex'});
				$('#ver-mas2').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos2').on('click', function(){
				$('#consideraciones-generales').slideUp('slow');
				$('#ver-mas2').show();
				$('#ver-menos2').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "CONSIDERACIONES GENERALES" (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "VER MAS" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas3').on('click', function(){
				$('#texto-desarrollo1').slideDown('slow');
				$('#ver-menos3').show();
				$('#ver-menos3').css({'display':'flex'});
				$('#ver-mas3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos3').on('click', function(){
				$('#texto-desarrollo1').slideUp('slow');
				$('#ver-mas3').show();
				$('#ver-menos3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas4').on('click', function(){
				$('#texto-desarrollo2').slideDown('slow');
				$('#ver-menos4').show();
				$('#ver-menos4').css({'display':'flex'});
				$('#ver-mas4').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos4').on('click', function(){
				$('#texto-desarrollo2').slideUp('slow');
				$('#ver-mas4').show();
				$('#ver-menos4').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "VER MAS" (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "LOCACION" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas-detalles-locacion-1').on('click', function(){
				$('#locacion-detalles').slideDown('slow');
				$('#velero').show();
				$('#locacion').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas-detalles-locacion-2').on('click', function(){
				$('#locacion-detalles').slideDown('slow');
				$('#hotel').show();
				$('#locacion').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "LOCACION" (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA VELERO" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-velero-1').on('click', function(){
				$('#img-presentacion-velero-1').show();
				$('#img-presentacion-velero-2').hide();
				$('#img-presentacion-velero-3').hide();
				$('#img-presentacion-velero-4').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-velero-2').on('click', function(){
				$('#img-presentacion-velero-2').show();
				$('#img-presentacion-velero-1').hide();
				$('#img-presentacion-velero-3').hide();
				$('#img-presentacion-velero-4').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-velero-3').on('click', function(){
				$('#img-presentacion-velero-3').show();
				$('#img-presentacion-velero-1').hide();
				$('#img-presentacion-velero-2').hide();
				$('#img-presentacion-velero-4').hide();
			});
		});
	</script>

		<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-velero-4').on('click', function(){
				$('#img-presentacion-velero-4').show();
				$('#img-presentacion-velero-1').hide();
				$('#img-presentacion-velero-2').hide();
				$('#img-presentacion-velero-3').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA VELERO" (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA VELERO" (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-hotel-1').on('click', function(){
				$('#img-presentacion-hotel-1').show();
				$('#img-presentacion-hotel-2').hide();
				$('#img-presentacion-hotel-3').hide();
				$('#img-presentacion-hotel-4').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-hotel-2').on('click', function(){
				$('#img-presentacion-hotel-2').show();
				$('#img-presentacion-hotel-1').hide();
				$('#img-presentacion-hotel-3').hide();
				$('#img-presentacion-hotel-4').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-hotel-3').on('click', function(){
				$('#img-presentacion-hotel-3').show();
				$('#img-presentacion-hotel-1').hide();
				$('#img-presentacion-hotel-2').hide();
				$('#img-presentacion-hotel-4').hide();
			});
		});
	</script>

		<script type="text/javascript">
		$(document).ready(function(){
			$('#img-miniatura-hotel-4').on('click', function(){
				$('#img-presentacion-hotel-4').show();
				$('#img-presentacion-hotel-1').hide();
				$('#img-presentacion-hotel-2').hide();
				$('#img-presentacion-hotel-3').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR "GALERIA VELERO" (TERMINA)  =====================-->


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

		<div class="disena-tu-momento">
			<div class="logo2">
				<img src="img/muestra-privada/muestra-privada-logo-rk.gif">
				<div id="ver-mas2"><a id="mas2"><p>CONSIDERACIONES GENERALES</p><img src="img/prensa/ver-mas.gif"></a></div>
				<div id="ver-menos2"><a id="menos2"><p>CONSIDERACIONES GENERALES</p><img src="img/prensa/ver-menos.gif"></a></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="consideraciones-generales">
			<div class="texto-consideraciones">
				<div class="titulo-consideraciones"><img src="img/prensa/ver-menos.gif"><p>CONSIDERACIONES GENERALES</p></div>
				<div class="p-consideraciones">
					<p>- Será elegido o reservado con un tiempo de 1 mes como mínimo.<br>
					- Presenta una colección limitada de 15 diseños diferentes y estarán a la venta el día del evento.<br>
				- La elección del servicio de Muestra Privada, considera la <strong>compra anticipada de un mínimo de 5 carteras</strong> de una muestra de 15 o la compra de paquetes de Hecho a la Medida o Diseña tu Momento. <br>
				- El cliente podrá elegir de ciertos prototipos de diseño y la combinación de cueros color y texturas de las carteras que comprara.
				- Puede atender grupos de min 20 personas y máximo de 60 personas.
				</p>
				</div>
			</div>
		</div>
		<div class="img-disena">
			<img src="img/muestra-privada/muestra-privada.jpg">
			
			<div class="clear"></div>
			
		</div>
		<div class="img-disena espacio-up-down">


		<p class="edicion">Rochi Kahn desarrolla y presenta el concepto  de <strong>Muestra Privada</strong>.


</p><br>

			<p class="edicion">La experiencia de estar frente a una colección especialmente elaborada y presentada por la diseñadora, mostrado y compartiendo ciertos detalles del estilo y exclusividad de cada una de sus piezas.</p><br>
<p class="edicion">
		Además de una mirada y conversatorio sobre la eleccion de este complemento, los tamaños, colores y combinaciones con nuestra vestimenta. Lo imponente de nuestra imagen según como lo combinamos y la interesante y a veces atrevida definición que podemos reflejar con la elección de los colores. <br><br>
</p>

			
			
			
		</div>
		
		<div class="galeria-disena">
			<h3>MUESTRA PRIVADA</h3>
			<a href="img/muestra-privada/mp1.jpg" data-lightbox="example-set"><img src="img/muestra-privada/mp1.jpg"></a>
			<a href="img/muestra-privada/mp2.jpg" data-lightbox="example-set"><img src="img/muestra-privada/mp2.jpg"></a>
			<a href="img/muestra-privada/mp3.jpg" data-lightbox="example-set"><img src="img/muestra-privada/mp3.jpg"></a>
			<a href="img/muestra-privada/mp4.jpg" data-lightbox="example-set"><img src="img/muestra-privada/mp4.jpg"></a>
			
			<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>

		<?php
			include 'pie-pagina.php'
		?>
	</div>
</body>

</html>