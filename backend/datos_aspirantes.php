<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lan="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Ingreso de Asppirantes </title>
	<link rel="shortcut icon" href="../app/imagenes/favicon.ico" />
 	<meta name="description" content="Inscripcion para nuevos aspirantes 2014">
 	<link rel="stylesheet" href="../app/css/normalize.css" />
 	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> --> 	
 	<link rel="stylesheet" href="../app/css/estilos.css" />
 	<link rel="stylesheet" href="config/css/estilo.css" />

	<script type="text/javascript" src="jquery/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
	<script type="text/javascript"> 
 
		jQuery(document).ready(function(){
			$('#representante').autocomplete({source:'action/suggest_zip.php', minLength:1});
		});
 
	</script> 
	<link rel="stylesheet" href="jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 
	<style type="text/css">
	
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:12px !important; }
	
	</style> 
</head>
<body>
	<?php 
		//include_once ("inc/ie.php");
	    include_once ("config/connection_bd.php");
	  //  include_once ("inc/header.php"); 
	    conectar(); 
        session_start();
		
	     $idre= $_SESSION['idrepresentantes'];
	?>	


	

	<section>
		<div id="principal">  
  
 
  <div id="contenido"> 
  
       <div class="div">
    <div id="formulario" style="display:none;">
    </div>
   <div id="tabla">
   
    <?php include('select_aspirant.php')  ?>

   </div>
</div>
  </div>
</div>
	</section>
	<div class="pie"></div>
</body>
</html>