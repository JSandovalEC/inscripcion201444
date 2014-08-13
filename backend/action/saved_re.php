<?php
echo'<meta charset="UTF-8">';
	include '../config/connection_bd.php';
	conectar();
	 
  

	$dni=$_POST["dni"];
	$nombres=$_POST["nombres"];
	$apellidos=$_POST["apellidos"];
	$genero=$_POST["genero"];
	$telefono=$_POST["telefono"];
	$parentesco=$_POST["parentesco"];
	$usuario=$_POST["usuario"];
	$password=$_POST["password"];
	$id_tipousuario=5;


	$consulta= "SELECT * FROM personas  WHERE dni='$dni'";
	$resultado= mysql_query($consulta);
	$fila=mysql_fetch_array($resultado);

	if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
	{
		
		mysql_query("INSERT INTO personas(dni,nombres,apellidos,genero,telefono) VALUES ('".utf8_decode(strtr(strtoupper($dni),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".utf8_decode(strtr(strtoupper($nombres),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".utf8_decode(strtr(strtoupper($apellidos),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".utf8_decode(strtr(strtoupper($genero),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".$telefono."')");

		     $consulta2= "SELECT MAX(idpersonas) FROM personas";
             $resultado2= mysql_query($consulta2);
             if ($row = mysql_fetch_row($resultado2))
		        { 
		        	$id1 = trim($row[0]);

		        }
				
				  mysql_query("INSERT INTO usuario(usuario, password,tipousuario_idtipo_usuario,personas_idpersonas) VALUES ('".utf8_decode(strtr(strtoupper($usuario),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".$password."','".$id_tipousuario."','".$id1."')");
				
		


         mysql_query("INSERT INTO representantes(parentesco,personas_idpersonas) VALUES ('".utf8_decode(strtr(strtoupper($parentesco),"àáâãäåæçèéêëìíîïðñòóôõöøùüú", "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÜÚ"))."','".$id1."')");
	
		echo '<script language = javascript>
		alert(" Datos Guardados.")
		self.location = "../main.php"
		</script>';
	}
	else //opcion2: Usuario logueado correctamente
	{
		

		echo '<script language = javascript>
		alert("El usuario que ud ingresó ya está registrado.")
		self.location = "../main.php"
		</script>';

		
	}

?>

