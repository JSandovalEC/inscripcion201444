<?php
    function conectar(){
    	$servidor = mysql_connect("localhost","root","") or die('Error de conexion al Servidor: ' . mysql_error());
		$basedatos = mysql_select_db("inscripcion") or die('Error de conexion con la BD: ' . mysql_error());
    }
	function desconectar(){
		mysql_close();
	}
?>
