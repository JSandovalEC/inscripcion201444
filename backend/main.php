<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lan="es" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Sistema de Inscripcion</title>
	<link rel="shortcut icon" href="../app/imagenes/favicon.ico" />
 	<meta name="description" content="Inscripcion para nuevos aspirantes 2014">
 	<link rel="stylesheet" href="../app/css/normalize.css" />
 	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
 --> 	
 <link rel="stylesheet" href="../app/css/estilos.css" />
</head>
<body>
	<div class="capa-video"></div>
	<?php include_once ("inc/ie.php");
	      include_once ("config/connection_bd.php");
	      include_once ("inc/header.php"); 
	      conectar(); 
         session_start();
if (!$_SESSION){
echo '<script language = javascript>
self.location = "index.php"
</script>';
}	
	
	?>
	<section>		
			<div class="contenido">						
					<form id="dat_ini_new" class="formulario" name="dat_ini_new" action="action/saved_re.php" method="post" >						
						<input  name="dni"  id="dni" class="input_form" type="text" placeholder="DNI" required />
						<input name="nombres" id="nombres" class="input_form" type="text" placeholder="Nombres" required />
						<input name="apellidos" id="apellidos" class="input_form" type="text" placeholder="Apellidos" required  onChange="return usuario_auto(this.form)"/>
						<input name="genero" id="genero" list="gen" class="input_form" type="text" placeholder="Genero" required />
						<datalist id="gen">

                             <option value="MASCULINO"/>
                             <option value="FEMENINO"/>

						</datalist>
						<input name="telefono" id="telefono"class="input_form" type="text" placeholder="Telefono" required />
						<input name="parentesco" class="input_form" type="text" placeholder="Parentesco" required />
						<input name="usuario" id="usuario" class="input_form" type="text"  readonly="readonly" placeholder="Usuario" />
						<input name="password" id="password" class="input_form" type="password"   readonly="readonly" placeholder="Contraseña" />						
						<div class="acciones">
							<input class="boton_login" type="submit" value="Limpiar" />							
							<input class="boton_login" type="submit" value="Guardar" />
						</div>
				    </form>

				    <form id="dat_edit" class="formulario" action="#" method="post" >
				    	<input class="input_form" type="text" placeholder="Ingrese el DNI" required />
				    	<input class="boton_login" type="submit" value="Buscar" />
				    	<div class="acciones">
							<input class="boton_login" type="submit" value="Limpiar" />
							<input class="boton_login" type="submit" value="Guardar" />
						</div>
				    </form>	
			</div>
		             
	</section>
	<div class="pie"></div>
	<!--<script src="../app/js/prefixfree.min.js"></script>-->
 	<script src="../app/js/jquery-1.11.1.min.js"></script>
 	<script src="../app/js/JavaScript.js"></script>
	<script>
		$(function()
		{

		});
	</script>

	<script>	
function usuario_auto(formulario)

 {	

      
              var letra1= dat_ini_new.nombres.value.charAt(0); 
              var digito_final1= dat_ini_new.dni.value.charAt(9);
              var digito_final2= dat_ini_new.dni.value.charAt(8);
              var digito_final3= dat_ini_new.dni.value.charAt(7);
              var letra2=dat_ini_new.apellidos.value.length; 
              alert(letra1);        
      
              var division= (dat_ini_new.apellidos.value.length)/2;

              var letra3=dat_ini_new.apellidos.value.substring(0,division);

              var letra_final=letra3.replace(/\s/g,'');

              var letra_fin=letra_final.toLowerCase();
              var letra_inicial=letra1.toLowerCase();

              var suma= letra_inicial+letra_fin+digito_final1+digito_final2+digito_final3;

              dat_ini_new.usuario.value=suma; 


              dat_ini_new.password.value=dat_ini_new.dni.value;
         
	
}


	</script>
</body>
</html>