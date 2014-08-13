<?php 
include_once("connection_bd.php");
conectar(); 
//Inicio de variables de sesión
if (@!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$user= $_POST['user'];
//$pass= md5($_POST['password']);
$password= $_POST['pass'];
$en=md5($password);

//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM usuario_cristorey WHERE usuario='".utf8_decode($user)."' AND password='".$password."'"; 
$resultado= mysql_query($consulta);
$fila=mysql_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "../index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesión y redirigimos a la página de usuario
	
	     $_SESSION['usuario'] = $fila['usuario'];
         $_SESSION['seguridad'] = $fila['tipo_usuario_idtipo_usuario'];
		 $_SESSION['apellidos']=$fila['apellidos'];	
		 $_SESSION['nombres']=$fila['nombres'];
	
		

	header("Location: ../main.php");
	
}
?>