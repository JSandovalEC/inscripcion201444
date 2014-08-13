<?php 
include_once("../config/connection_bd.php");
conectar(); 
//Inicio de variables de sesión
if (@!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario

$dni = $_POST['representante'];
//$usuario_ingreso = $_POST['usuario_ingreso'];

//Consultar si los datos son están guardados en la base de datos
$consulta= "select idpersonas from personas  where dni='".$dni."'"; 
$resultado= mysql_query($consulta);
$fila=mysql_fetch_array($resultado);
$idpersonas=$fila['idpersonas'];

$consulta2= "select parentesco, idrepresentantes  from representantes where personas_idpersonas='".$idpersonas."'"; 
$resultado2= mysql_query($consulta2);
$fila2=mysql_fetch_array($resultado2);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("ALERTA: Debe seleccionar un Nivel.")
	
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	
	$_SESSION['idrepresentantes'] = $fila2['idrepresentantes'];
	$_SESSION['parentesco'] = $fila['parentesco'];

	//$_SESSION['id_usuario'] = $fila2['id_usuario'];
	
	

         
		

	//header("Location: Udat_subniveles.php");
	header("Location: ../datos_aspirantes.php");
	
}
?>