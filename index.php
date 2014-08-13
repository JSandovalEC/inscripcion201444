<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lan="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Sistema de Inscripcion</title>
	<link rel="shortcut icon" href="app/imagenes/favicon.ico" />
 	<meta name="description" content="Inscripcion para nuevos aspirantes 2014">
 	<link rel="stylesheet" href="app/css/normalize.css" />
 	<!--<link href='http://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
 	<link rel="stylesheet" href="app/css/estilos.css" />
</head>
<body>
	<?php include_once ("backend/inc/ie.php") ?>	
	<header class="hindex">
		<div class="contenido">
			<h1 class="hindext1">Sistema de Inscripcion On Line</h1>
			<figure class="hfigure1">
				<img src="app/imagenes/logo.png" alt="Cristo Rey" />
			</figure>
		</div>
	</header>
	<div class="capa-video"></div>
	<div class="cont-video">
		<video width="100%" preload autoplay muted loop >
			<source src="app/video/video1.mp4" />
			<source src="app/video/video1.ogv" />
		</video>
	</div>	
	<section>		
		<article>
			<div class="contenido">
				<div class="mensaje">
					<h2>
						Sistema de inscripción para nuevos aspirantes a este año lectivo
					</h2>
					<a class="boton" href="#" id="mostrar-form">
						Acceder al Sistema
					</a>			
				</div>
			</div>	
			<div class="area-login">					
				<form action="#" method="post" id="formulario" class="formulario">	   
					<div class="user">
						<input id="user" class="input_login" type="text" placeholder="Usuario" required />
					</div>
					<div class="password">
						<input id="pass" class="input_login" type="password" placeholder="Contraseña" required />
					</div>
					<div class="acceder">
						<input class="boton_login" type="submit" value="Ingresar" />
					</div>						
			    </form>				 	          
			</div>			
		</article>
	</section>
	<?php include_once ("backend/inc/footer.php") ?>
	<!--<script src="app/js/prefixfree.min.js"></script>-->
	<script src="app/js/jquery-1.11.1.min.js"></script>
	<script src="app/js/JavaScript.js"></script>
	<script>
		$(function()
		{

		});
	</script>
</body>
</html>