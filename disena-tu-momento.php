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
				<img src="img/disena-tu-momento/disena-tu-momento-logo.jpg">
				<div id="ver-mas2"><a id="mas2"><p>CONSIDERACIONES GENERALES</p><img src="img/prensa/ver-mas.gif"></a></div>
				<div id="ver-menos2"><a id="menos2"><p>CONSIDERACIONES GENERALES</p><img src="img/prensa/ver-menos.gif"></a></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="consideraciones-generales">
			<div class="texto-consideraciones">
				<div class="titulo-consideraciones"><img src="img/prensa/ver-menos.gif"><p>CONSIDERACIONES GENERALES</p></div>
				<div class="p-consideraciones">
					<p>
						- Se realiza el diseño y reserva del servicio min 20 días antes de la fecha de celebración. (Tiempo de  elaboración y coordinación).<br><br>
						-  El diseño es elegido de propuestas presentadas por Rochi Kahn, colores, cueros, pieles y texturas pueden   elegirse según  catálogo de la diseñadora. (Uno o varios diseños).<br><br>
						- El traslado en un auto BMW.<br><br>
						- El lugar elegido, ciudad (almuerzo o cena para dos) o alta mar (paquete especial 4 horas navegando, capacidad hasta 8 personas). 
					</p>
				</div>
			</div>
		</div>
		<div class="img-disena"><img src="img/disena-tu-momento/diseno.jpg"></div>
		<div class="img-disena"><img src="img/disena-tu-momento/traslado.jpg"></div>
		<div id="locacion">
			<div class="presentacion">
				<img id="mas-detalles-locacion-1" src="img/disena-tu-momento/velero-presentacion.jpg">
				<img id="mas-detalles-locacion-2" src="img/disena-tu-momento/traslado-presentacion.jpg">
			</div>
			<div class="clear"></div>
		</div>
		<div id="locacion-detalles">
			<div class="titulo-locacion"><img class="img-locacion-1" src="img/disena-tu-momento/linea-circulo.gif"><p class="p-locacion">LA LOCACIÓN</p><img class="img-locacion-2" src="img/disena-tu-momento/circulo.gif"></div>
			<ul id="accordion" class="accordion">
						<li>
							<div class="link"><i class="fa fa-caret-right"></i>VELERO</div>
							<ul class="submenu" id="velero">
								<li>
									<div id="img-grande-velero">
										<img id="img-presentacion-velero-1" src="img/disena-tu-momento/velero.jpg">
										<img id="img-presentacion-velero-2" style="display:none" src="img/disena-tu-momento/velero-2.jpg">
										<img id="img-presentacion-velero-3" style="display:none" src="img/disena-tu-momento/velero-3.jpg">
										<img id="img-presentacion-velero-4" style="display:none" src="img/disena-tu-momento/velero-4.jpg">
									</div>
									<div id="img-miniatura-velero">
										<img id="img-miniatura-velero-1" src="img/disena-tu-momento/velero-miniatura.jpg">
										<img id="img-miniatura-velero-2" src="img/disena-tu-momento/velero-miniatura.jpg">
										<img id="img-miniatura-velero-3" src="img/disena-tu-momento/velero-miniatura.jpg">
										<img id="img-miniatura-velero-4" src="img/disena-tu-momento/velero-miniatura.jpg">
									</div>
								</li>
								<div class="clear"></div>
							</ul>
						</li>
						<div class="clear"></div>
						<li>
							<div class="link"><i class="fa fa-caret-right"></i>HOTEL B</div>
							<ul class="submenu" id="hotel">
								<li>
									<div id="img-grande-hotel">
										<img id="img-presentacion-hotel-1" src="img/disena-tu-momento/hotel-b.jpg">
										<img id="img-presentacion-hotel-2" style="display:none" src="img/disena-tu-momento/hotel-b-2.jpg">
										<img id="img-presentacion-hotel-3" style="display:none" src="img/disena-tu-momento/hotel-b-3.jpg">
										<img id="img-presentacion-hotel-4" style="display:none" src="img/disena-tu-momento/hotel-b-4.jpg">
									</div>
									<div id="img-miniatura-hotel">
										<img id="img-miniatura-hotel-1" src="img/disena-tu-momento/traslado-miniatura.jpg">
										<img id="img-miniatura-hotel-2" src="img/disena-tu-momento/traslado-miniatura.jpg">
										<img id="img-miniatura-hotel-3" src="img/disena-tu-momento/traslado-miniatura.jpg">
										<img id="img-miniatura-hotel-4" src="img/disena-tu-momento/traslado-miniatura.jpg">
									</div>
								</li>
								<div class="clear"></div>
							</ul>
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