<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>ROCHI KAHN - Diseñadora de Carteras</title>

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

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mas').on('click', function(){
				$('#galeria-prensa').slideDown('slow');
				$('#galeria-prensa').css({'display':'flex'});
				$('#contenedor-slider-total').hide();
				$('#ver-menos').show();
				$('#ver-menos').css({'display':'flex'});
				$('#ver-mas').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#menos').on('click', function(){
				$('#galeria-prensa').slideUp('slow');
				$('#contenedor-slider-total').show();
				$('#ver-mas').show();
				$('#ver-menos').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA LLAMAR A DIV OCULTO (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR VIDEOS (INICIA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video1').on('click', function(){
				$('#video1').show();
				$('#video2').hide();
				$('#video3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video2').on('click', function(){
				$('#video2').show();
				$('#video1').hide();
				$('#video3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video3').on('click', function(){
				$('#video3').show();
				$('#video1').hide();
				$('#video2').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video-galeria-1').on('click', function(){
				$('#video1').show();
				$('#video2').hide();
				$('#video3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video-galeria-2').on('click', function(){
				$('#video2').show();
				$('#video1').hide();
				$('#video3').hide();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#mostrar-video-galeria-3').on('click', function(){
				$('#video3').show();
				$('#video1').hide();
				$('#video2').hide();
			});
		});
	</script>

<!--================== 	SCRIPT PARA MOSTRAR VIDEOS (TERMINA)  =====================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn-cerrar').on('click', function(){
			    $('#video')[0].pause();
			});
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
	<div class="contenedor">

		<header>

		<!-- VENTANDA MODAL VIDEO ROCHI KAHN (INICIA) -->
		<!-- <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal">
			<div class="contenido">
				<video id="video" autoplay controls>
					<source src="video/rochikahn.mp4" type="video/mp4">
					<source src="video/rochikahn.ov" type='video/ogg'>
					<source src="video/rochikahn.webm" type='video/webm''>
				</video>
			</div>
		</div> -->
		<!-- VENTANDA MODAL VIDEO ROCHI KAHN (TERMINA) -->

			<?php
				include 'menu.php'
			?>
		</header>

		<div class="contenedor-slider">
			<div id="contenedor-slider">
				<div id="slider">
					<section>
						<img src="img/slider/rochikahn-banner1.jpg">
					</section>
					<section>
						<img src="img/slider/rochikahn-banner2.jpg">
					</section>
					<section>
						<img src="img/slider/rk-banner3.jpg">
					</section>
				</div>
				<div class="nueva-coleccion">
					<div class="texto-nueva">
						<img class="img-nueva-1" src="img/slider/circulo-slider.png"><p class="p-nueva"><a href="">NUEVA COLECCIÓN</a></p><img class="img-nueva-2" src="img/slider/circulo-linea-slider.png"></div>
					<div class="fecha-nueva"><img src="img/slider/linea-corta-slider.png"><p>2016</p></div>
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

		<div class="edicion-limitada">
			<div id="izquierda-edicion">
				<div class="espacio-edicion"></div>
				<div class="menu-edicion">
					<div class="titulo-edicion"><img class="img-edicion-1" src="img/index/circulo.jpg"><p class="p-edicion">EDICIÓN LIMITADA</p><img class="img-edicion-2" src="img/index/circulo-linea.gif"></div>
					<div class="clear"></div>
					<ul>
						<li><a href="seduce-color.php#seduce-color-mostrar"><i class="fa fa-caret-right"></i>SEDUCE COLOR</a></li>
						<li><a href="peru-de-lujo.php#peru-lujo-mostrar"><i class="fa fa-caret-right"></i>PERÚ DE LUJO</a></li>
						<li><a href="viajeras.php#viajeras-mostrar"><i class="fa fa-caret-right"></i>VIAJERAS</a></li>
						<li><a href="princesa.php#princesa-mostrar"><i class="fa fa-caret-right"></i>PRINCESA</a></li>
						<li><a href="look-and-feel.php#look-and-feel-mostrar"><i class="fa fa-caret-right"></i>LOOK AND FEEL</a></li>
						<li><a href="versatil.php#versatil-mostrar"><i class="fa fa-caret-right"></i>VERSATIL</a></li>
						<li><a href="intervenidas.php#intervenidas-mostrar"><i class="fa fa-caret-right"></i>INTERVENIDAS</a></li>
						<li><a href="petit-ro.php#petit-mostrar"><i class="fa fa-caret-right"></i>PETIT Ro</a></li>
					</ul>
				</div>
			</div>
			<div id="derecha-edicion">
				<img src="img/index/fondo-transparente.png">
			</div>
		</div>
		<div class="experiencias">
			<div id="izquierda-experiencias">
				<img src="img/index/fondo-transparente-2.png">
			</div>
			<div id="derecha-experiencias">
				<div class="espacio-experiencias"></div>
				<div class="menu-experiencias">
					<div class="titulo-experiencias"><img class="img-experiencias-1" src="img/index/linea-circulo.gif"><p class="p-experiencias">EXPERIENCIAS</p><img class="img-experiencias-2" src="img/index/circulo.jpg"></div>
					<div class="clear"></div>
					<ul id="accordion" class="accordion">
						<li>
							<div class="link"><i class="fa fa-caret-right"></i>DISEÑA TU MOMENTO</div>
							<ul class="submenu">
								<li><a href="#">- CAPRICCIO</a></li>
								<li><a href="#">- PARA NOSOTRAS</a></li>
								<li><a href="#">- JUST MARRIED</a></li>
								<li><a href="#">- LUJOSAMENTE PREMIADA</a></li>
								<li><a href="#">- ACTIVACIONES CORPORATIVAS</a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li><a href="#"><i class="fa fa-caret-right"></i>MUESTRA PRIVADA</a></li>
						<li><a href="#"><i class="fa fa-caret-right"></i>HECHA A LA MEDIDA</a></li>
					</ul>
					<script src="js/acordion.js"></script>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="trayectoria">
			<div class="titulo-trayectoria-2"><div class="texto-titulo-trayectoria-2"><p>TRAYECTORIA</p></div></div>
			
			<div class="rochi"><p>ROCHI KAHN</p></div>
			<div class="contenido-trayectoria">
				<div class="izquierda-trayectoria">

					<p>Rochi Kahn Marca y diseñadora peruana, destaca por su creatividad e innovación permanente, no solo en sus diseños plasmados dentro de un concepto de piezas únicas; y su tendencia a inusuales, inesperadas e irrepetibles combinaciones de materiales, colores e ideas en sus composiciones de edición limitada de cada colección de carteras.<br><br>

					Dirige también una línea de conceptos que acompaña y tiene relación directa al desarrollo de sus diseños, a la compra y entrega de sus bolsos y carteras.<br><br>

					Son experiencias y momentos para sus clientes (personas y corporaciones) que personaliza y sorprende, propuestas exclusivas de la marca en otros formatos.<br><br> 

					Sus diseños resaltan en el mercado local e internacional, posicionando sus carteras en las vitrinas de espacios más exclusivos.</p>

					<a href="trayectoria.php">Leer más</a>

					<!-- <div class="contenedor-cuadrados">

						<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/1/rk-trayectoria-arteymoda-thumbs.jpg"><p>PERÚ MODA Y TÉXTILES</p></a></div>

						<div class="cuadro-trayectoria margenes"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/2/arteymoda-thumbs.jpg"><p>ARTE Y MODA</p></a></div>

						<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/3/peru-moda-rk-2015-thumbs.jpg"><p>PASARELA MERCEDEZ BENZ PERÚ MODA</p></a></div>
						<div class="clear"></div>
					</div>

					<div class="contenedor-cuadrados2">
						<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/4/ethical-rk-thumbs.jpg"><p>PASARELA ETHICAL FASHION PARIS</p></a></div>

						<div class="cuadro-trayectoria margenes"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/5/rk-lanzamiento-marca-thumbs.jpg"><p>LANZAMIENTO ROCHI KAHN</p></a></div>

						
					</div> -->
				</div>
				<div class="derecha-trayectoria"><img src="img/trayectoria/rochi-kahn-trayectoria.jpg"></div>

				<div class="clear"></div>

				<div class="contenedor-cuadro-trayectoria">

					<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/1/rk-trayectoria-arteymoda-thumbs.jpg"><p>PERÚ MODA Y TÉXTILES</p></a></div>

					<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/2/arteymoda-thumbs.jpg"><p>ARTE Y MODA</p></a></div>

					<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/3/peru-moda-rk-2015-thumbs.jpg"><p>PASARELA MERCEDEZ BENZ PERÚ MODA</p></a></div>
					
					<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/4/ethical-rk-thumbs.jpg"><p>PASARELA ETHICAL FASHION PARIS</p></a></div>

					<div class="cuadro-trayectoria"><a href="#" style="text-decoration:none;color:black;"><img src="img/trayectoria/5/rk-lanzamiento-marca-thumbs.jpg"><p>LANZAMIENTO ROCHI KAHN</p></a></div>
					
				</div>
				
			</div>
		</div>
		<div class="prensa">
			<div class="titulo-prensa-2"><div class="texto-titulo-prensa-2"><p>PRENSA</p></div></div>
			<!-- <div class="titulo-prensa"><img class="img-prensa-1" src="img/prensa/linea-circulo3.gif"><p class="p-prensa">PRENSA</p><img class="img-prensa-2" src="img/prensa/circulo-linea3.gif"></div> -->
			<div class="rochi"><p>ROCHI KAHN</p></div>
			<div class="contenido-prensa">
				<video id="video1" poster="video/rk-video-principal.jpg" controls>
					<source src="video/rochikahn.mp4"  type="video/mp4">
				</video>
				<iframe style="display:none;" id="video-1" width="100%" height="400" src="https://www.youtube.com/embed/-SisfymY9lI" frameborder="0" allowfullscreen></iframe>
				<iframe id="video2" style="display:none;" width="100%" height="400" src="https://www.youtube.com/embed/d05H46M4Ouc" frameborder="0" allowfullscreen></iframe>
				<iframe id="video3" style="display:none;" width="100%" height="400" src="https://www.youtube.com/embed/J1TSzVqwxys" frameborder="0" allowfullscreen></iframe>
				<div class="clear"></div>
				<div id="contenedor-slider-total">
					<div id="contenedor-slider2">
						<div id="slider2">
							<section>
								<div class="miniatura"><a id="mostrar-video1" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a id="mostrar-video2" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a id="mostrar-video3" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
							</section>
							<section>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
							</section>
							<section>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
								<div class="miniatura"><a href="#"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"></a></div>
							</section>
						</div>
					</div>
					<div id="btn-prev2"><img src="img/slider/izquierda-rochikahn.gif"></div>
					<div id="btn-next2"><img src="img/slider/derecha-rochikahn.gif"></div>
					<script src="js/miniatura-slider.js"></script>
				</div>
				<div id="ver-mas"><a id="mas"><p>VER MÁS</p><img src="img/prensa/ver-mas.gif"></a></div>
				<div id="ver-menos"><a id="menos"><p>MENOS</p><img src="img/prensa/ver-menos.gif"></a></div>
				<div id="galeria-prensa">
					<article><a id="mostrar-video-galeria-1" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></a></article>
					<article><a id="mostrar-video-galeria-2" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></a></article>
					<article><a id="mostrar-video-galeria-3" style="cursor:pointer"><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></a></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
					<article><img src="img/trayectoria/rochi-kahn-trayectoria-disena-tu-momento.jpg"><p>TITULO</p></article>
				</div>
			</div>
		</div>
		<?php
			include 'pie-pagina.php'
		?>
	<!--
		<div class="trayectoria">
			<div></div>
			<div></div>
			<div>
				<div class="izquierda-trayectoria">
					<div><img src="img/"></div>
					<div><img src="img/"></div>
					<div><img src="img/"></div>
					<div><img src="img/"></div>
					<div><img src="img/"></div>
					<div><img src="img/"></div>
				</div>
				<div class="derecha-trayectoria">
					<img src="img/">
				</div>
			</div>
		</div>
	-->
	</div>
</body>

</html>