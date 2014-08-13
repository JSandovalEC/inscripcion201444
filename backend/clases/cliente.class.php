<?php 
include_once("conexion.class.php");

class Cliente{
 //constructor	
 	var $con;
 	function Cliente(){
 		$this->con=new DBManager;
 	}

	/*function insertar($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}*/
	
	function insertar($campos)
	{
		if($this->con->conectar()==true)
		{
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO personas(cedula,apellidos,nombres,funcion) VALUES ('".utf8_decode($campos[0])."', '".utf8_decode(strtoupper($campos[1]))."','".utf8_decode(strtoupper($campos[2]))."','".utf8_decode(strtoupper($campos[3]))."')");
			
		}
	}
	
	function insertarprivilegios($campos_privilegios){
		if($this->con->conectar()==true){
			//$rs1= mysql_query("SELECT  max(id_per) as id_perultimo  from persona ");
			
			 
		$rs1 = mysql_query("SELECT MAX(id_usuario) FROM usuario");   		
		if ($row = mysql_fetch_row($rs1))
		{ $id1 = trim($row[0]); }
		
		if($campos_privilegios[0]="SI" and $campos_privilegios[1]="SI" and $campos_privilegios[2]="SI")
		{
			return mysql_query("insert into privilegios_usuarios (ingresar_todos,modificar_todos,eliminar_todos,ingresar_indicador1,modificar_indicador1,ingresar_evidencias,modificar_evidencias,eliminar_evidencias,consulta_general,evaluar,idusuario) values('".$campos_privilegios[0]."','".utf8_decode(strtoupper($campos_privilegios[1]))."','".utf8_decode(strtoupper($campos_privilegios[2]))."','NO' ,'NO', 'NO' ,'NO','NO','NO','NO','".$id1."')");
		}
		else if($campos_privilegios[3]="SI" or $campos_privilegios[4]="SI" or $campos_privilegios[5]="SI" or $campos_privilegios[6]="SI" or $campos_privilegios[7]="SI")
			{
		return mysql_query("insert into privilegios_usuarios (ingresar_todos,modificar_todos,eliminar_todos,ingresar_indicador1,modificar_indicador1,ingresar_evidencias,modificar_evidencias,eliminar_evidencias,consulta_general,evaluar,idusuario) values('NO','NO','NO','".utf8_decode(strtoupper($campos_privilegios[3]))."','".utf8_decode(strtoupper($campos_privilegios[4]))."','".utf8_decode(strtoupper($campos_privilegios[5]))."','".utf8_decode(strtoupper($campos_privilegios[6]))."','".utf8_decode(strtoupper($campos_privilegios[7]))."','NO','NO','".$id1."')");
		}
		
		
		else 
		
		   if($campos_privilegios[8]="SI")	
			{
			return mysql_query("insert into privilegios_usuarios (ingresar_todos,modificar_todos,eliminar_todos,ingresar_indicador1,modificar_indicador1,ingresar_evidencias,modificar_evidencias,eliminar_evidencias,consulta_general,evaluar,idusuario) values('NO','NO','NO','NO','NO','NO','NO','NO','".utf8_decode(strtoupper($campos_privilegios[8]))."','NO','".$id1."')");
		}
		
		else 
		
		   if($campos_privilegios[9]="SI")	
			{
			return mysql_query("insert into privilegios_usuarios (ingresar_todos,modificar_todos,eliminar_todos,ingresar_indicador1,modificar_indicador1,ingresar_evidencias,modificar_evidencias,eliminar_evidencias,consulta_general,evaluar,idusuario) values('NO','NO','NO','NO','NO','NO','NO','NO','NO','".utf8_decode(strtoupper($campos_privilegios[8]))."','".$id1."')");
		}
		//($sql1);
			
 //$fila=mysql_fetch_array($rs1);
//$id_perul = $fila['id_perultimo'];
			//if ($row = mysql_fetch_row($rs1))
		     // { $id1 = trim($row[0]+1); }
			   
			// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,apellidos_usu,nombres_usu,idPer_usu)             VALUES ('".$campos_nuevos[0]."', '".$campos_nuevos[1]."','".$campos_nuevos[2]."','".$campos_nuevos[3]."','".$idperul."')");
				
			
		}
	}
	
	
	function insertarcedaspirante($campos_aspirantes){
		if($this->con->conectar()==true){
			//$rs1= mysql_query("SELECT  max(id_per) as id_perultimo  from persona ");
			
			 
		$rs1 = mysql_query("SELECT MAX(id_per) FROM persona");   		
		if ($row = mysql_fetch_row($rs1))
		{ $id1 = trim($row[0]); }
		return mysql_query("insert into aspirantes (cedula_asp,grado_va,institucion_viene,idPer_asp) values('".$campos_aspirantes[0]."','".utf8_decode(strtoupper($campos_aspirantes[1]))."','".utf8_decode(strtoupper($campos_aspirantes[2]))."','".$id1."')");
		
		//($sql1);
			
 //$fila=mysql_fetch_array($rs1);
//$id_perul = $fila['id_perultimo'];
			//if ($row = mysql_fetch_row($rs1))
		     // { $id1 = trim($row[0]+1); }
			   
			// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,apellidos_usu,nombres_usu,idPer_usu)             VALUES ('".$campos_nuevos[0]."', '".$campos_nuevos[1]."','".$campos_nuevos[2]."','".$campos_nuevos[3]."','".$idperul."')");
				
			
		}
	}
	
	
	function insertar_otro_representante2($campos_otro_representante2)
	{
		if($this->con->conectar()==true)
		{
		
		
			return mysql_query("INSERT INTO otro_representante(cedula,fecha_nacimiento,apellidos,nombres,telefono,email,parentesco,otro_familiar,id_asp) VALUES ('".utf8_decode(strtoupper($campos_otro_representante2[0]))."', '".utf8_decode(strtoupper($campos_otro_representante2[1]))."','".utf8_decode(strtoupper($campos_otro_representante2[2]))."','".utf8_decode(strtoupper($campos_otro_representante2[3]))."','".utf8_decode(strtoupper($campos_otro_representante2[4]))."','".utf8_decode(strtoupper($campos_otro_representante2[5]))."','".utf8_decode(strtoupper($campos_otro_representante2[6]))."','".utf8_decode(strtoupper($campos_otro_representante2[7]))."','".utf8_decode(strtoupper($campos_otro_representante2[8]))."')");
		}
	}
	
	function insertar_direccion_padre($campos_direcion)
	{
		if($this->con->conectar()==true)
		{
		
			return mysql_query("insert into direccion (callePri_dir, calleSec_dir, numero_dir, parroquia_dir, sector, barrio, convencion_dir, email_dir, celular_dir) VALUES ('".utf8_decode(strtoupper($campos_direcion[0]))."', '".utf8_decode(strtoupper($campos_direcion[1]))."','".utf8_decode(strtoupper($campos_direcion[2]))."','".utf8_decode(strtoupper($campos_direcion[3]))."','".utf8_decode(strtoupper($campos_direcion[4]))."','".utf8_decode(strtoupper($campos_direcion[5]))."','".utf8_decode(strtoupper($campos_direcion[6]))."','".utf8_decode(strtoupper($campos_direcion[7]))."','".utf8_decode(strtoupper($campos_direcion[8]))."')");
		}
	}
	
	function insertar_direccion_madre($campos_direcion)
	{
		if($this->con->conectar()==true)
		{
		
			return mysql_query("insert into direccion (callePri_dir, calleSec_dir, numero_dir, parroquia_dir, sector, barrio, convencion_dir, email_dir, celular_dir) VALUES ('".utf8_decode(strtoupper($campos_direcion[0]))."', '".utf8_decode(strtoupper($campos_direcion[1]))."','".utf8_decode(strtoupper($campos_direcion[2]))."','".utf8_decode(strtoupper($campos_direcion[3]))."','".utf8_decode(strtoupper($campos_direcion[4]))."','".utf8_decode(strtoupper($campos_direcion[5]))."','".utf8_decode(strtoupper($campos_direcion[6]))."','".utf8_decode(strtoupper($campos_direcion[7]))."','".utf8_decode(strtoupper($campos_direcion[8]))."')");
		}
	}
	
	function insertar_direccion_aspirante($campos_dirasp)
	{
		if($this->con->conectar()==true)
		{
		 
			  return mysql_query("insert into direccion (callePri_dir, calleSec_dir, numero_dir, parroquia_dir, sector, barrio, convencion_dir, email_dir) VALUES ('".utf8_decode(strtoupper($campos_dirasp[0]))."', '".utf8_decode(strtoupper($campos_dirasp[1]))."','".utf8_decode(strtoupper($campos_dirasp[2]))."','".utf8_decode(strtoupper($campos_dirasp[3]))."','".utf8_decode(strtoupper($campos_dirasp[4]))."','".utf8_decode(strtoupper($campos_dirasp[5]))."','".utf8_decode(strtoupper($campos_dirasp[6]))."','".utf8_decode(strtoupper($campos_dirasp[7]))."')");
		
			 
		}
	}
	
	function insertar_otro_representante3($campos_otro_representante2,$otro)
	{
		if($this->con->conectar()==true)
		{
		
		
			
			
			return mysql_query("UPDATE otro_representante SET cedula = '".utf8_decode(strtoupper($campos_otro_representante2[0]))."', fecha_nacimiento='".utf8_decode(strtoupper($campos_otro_representante2[1]))."', apellidos='".utf8_decode(strtoupper($campos_otro_representante2[2]))."', nombres = '".utf8_decode(strtoupper($campos_otro_representante2[3]))."', telefono = '".utf8_decode(strtoupper($campos_otro_representante2[4]))."', email= '".utf8_decode(strtoupper($campos_otro_representante2[5]))."', parentesco = '".utf8_decode(strtoupper($campos_otro_representante2[6]))."', otro_familiar='".utf8_decode(strtoupper($campos_otro_representante2[7]))."', id_asp='".utf8_decode(strtoupper($campos_otro_representante2[8]))."'  WHERE id_representante = ".$otro);
		}
	}
	function insertar_direccion_aspirante2($campos_dirasp,$dir)
	{
		if($this->con->conectar()==true)
		{
		    //  $consulta= "select id_dir FROM direccion where id_dir=(select idDir_asp from aspirantes where '".$id_dir2."')"; 
      //  $resultado= mysql_query($consulta);
       // $fila=mysql_fetch_array($resultado);
     // $id_dir=$fila['id_dir'];
	  
	   // $consulta2= "SELECT id_dir FROM direccion "; 
       // $resultado2= mysql_query($consulta2);
       // $fila2=mysql_fetch_array($resultado2);
     // $id_dir_consulta=$fila2['id_dir'];
	
	  
	      
	  
	 
	
		  return mysql_query("UPDATE direccion SET callePri_dir = '".utf8_decode(strtoupper($campos_dirasp[0]))."', calleSec_dir='".utf8_decode(strtoupper($campos_dirasp[1]))."', numero_dir='".utf8_decode(strtoupper($campos_dirasp[2]))."', parroquia_dir = '".utf8_decode(strtoupper($campos_dirasp[3]))."', sector = '".utf8_decode(strtoupper($campos_dirasp[4]))."', barrio= '".utf8_decode(strtoupper($campos_dirasp[5]))."', convencion_dir = '".utf8_decode(strtoupper($campos_dirasp[6]))."', email_dir='".utf8_decode(strtoupper($campos_dirasp[7]))."' WHERE id_dir = ".$dir);
	  }
			
		
	}
	
	
	function insertar_direccion_padre2($campos_direcion,$dir)
	{
		if($this->con->conectar()==true)
		{
		
		 return mysql_query("UPDATE direccion SET callePri_dir = '".utf8_decode(strtoupper($campos_direcion[0]))."', calleSec_dir='".utf8_decode(strtoupper($campos_direcion[1]))."', numero_dir='".utf8_decode(strtoupper($campos_direcion[2]))."', parroquia_dir = '".utf8_decode(strtoupper($campos_direcion[3]))."', sector = '".utf8_decode(strtoupper($campos_direcion[4]))."', barrio= '".utf8_decode(strtoupper($campos_direcion[5]))."', convencion_dir = '".utf8_decode(strtoupper($campos_direcion[6]))."', email_dir='".utf8_decode(strtoupper($campos_direcion[7]))."', celular_dir='".utf8_decode(strtoupper($campos_direcion[8]))."' WHERE id_dir = ".$dir);
		 
		 
		
		}
	}
	
	function insertar_direccion_madre2($campos_direcion,$dir)
	{
		if($this->con->conectar()==true)
		{
		
			 return mysql_query("UPDATE direccion SET callePri_dir = '".utf8_decode(strtoupper($campos_direcion[0]))."', calleSec_dir='".utf8_decode(strtoupper($campos_direcion[1]))."', numero_dir='".utf8_decode(strtoupper($campos_direcion[2]))."', parroquia_dir = '".utf8_decode(strtoupper($campos_direcion[3]))."', sector = '".utf8_decode(strtoupper($campos_direcion[4]))."', barrio= '".utf8_decode(strtoupper($campos_direcion[5]))."', convencion_dir = '".utf8_decode(strtoupper($campos_direcion[6]))."', email_dir='".utf8_decode(strtoupper($campos_direcion[7]))."', celular_dir='".utf8_decode(strtoupper($campos_direcion[8]))."' WHERE id_dir = ".$dir);
		}
	}
	
		function insertar_persona_madre2($campos_personap,$direccion,$per)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=3;
		
		//$rs5 = mysql_query("SELECT MAX(id_dir) FROM direccion");   		
		//if ($row = mysql_fetch_row($rs5))
		//{ $id_dir = trim($row[0]); }
		
			return mysql_query("UPDATE persona SET fechaNac_per = '".utf8_decode(strtoupper($campos_personap[0]))."', apellidos_per='".utf8_decode(strtoupper($campos_personap[1]))."', nombres_per='".utf8_decode(strtoupper($campos_personap[2]))."', lugarNac_per = '".utf8_decode(strtoupper($campos_personap[3]))."', genero_per = '".$genero_per."', idDir_per= '".$direccion."' WHERE id_per = ".$per);
		}
	}
	
	function insertar_madres_pre2($campos_madrespre,$personas,$padre)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=3;
		$consulta= "SELECT id_asp FROM aspirantes WHERE idPer_asp='".$campos_madrespre[12]."'"; 
        $resultado= mysql_query($consulta);
        $fila=mysql_fetch_array($resultado);
      $id_aspirante=$fila['id_asp'];
	  
	
		//$rs6 = mysql_query("SELECT MAX(id_per) FROM persona");   		
		//if ($row = mysql_fetch_row($rs6))
		//{ $id_per_pad = trim($row[0]); }
		
			return mysql_query("UPDATE padres_preinscripcion SET cedula_padPre = '".utf8_decode(strtoupper($campos_madrespre[0]))."', lugarTra_padPre='".utf8_decode(strtoupper($campos_madrespre[1]))."', actiTra_padPre='".utf8_decode(strtoupper($campos_madrespre[2]))."', profesion_padPre = '".utf8_decode(strtoupper($campos_madrespre[3]))."', direccionTra_padPre = '".utf8_decode(strtoupper($campos_madrespre[4]))."', telefonoTra_padPre = '".utf8_decode(strtoupper($campos_madrespre[5]))."', nivelAca_padPre = '".utf8_decode(strtoupper($campos_madrespre[6]))."', representante='".utf8_decode(strtoupper($campos_madrespre[7]))."', estadoCiv_padPre='".utf8_decode(strtoupper($campos_madrespre[8]))."', autorizadoRet='".utf8_decode(strtoupper($campos_madrespre[9]))."', ex_estudiante='".utf8_decode(strtoupper($campos_madrespre[10]))."', promocion='".utf8_decode(strtoupper($campos_madrespre[11]))."',idTip_padPre='".$genero_per."',idPer_padPre='".$personas."', idasp_pad='".$id_aspirante."' WHERE id_padPre = ".$padre);
		}
	}
	function insertar_persona_padre2($campos_personap,$direccion,$per)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=2;
		
		//$rs5 = mysql_query("SELECT MAX(id_dir) FROM direccion");   		
		//if ($row = mysql_fetch_row($rs5))
		//{ $id_dir = trim($row[0]); }
		
			//return mysql_query("insert into persona (fechaNac_per, apellidos_per, nombres_per, lugarNac_per, genero_per, idDir_per)  VALUES ('".utf8_decode(strtoupper($campos_personap[0]))."', '".utf8_decode(strtoupper($campos_personap[1]))."','".utf8_decode(strtoupper($campos_personap[2]))."','".utf8_decode(strtoupper($campos_personap[3]))."','".$genero_per."','".$id_dir."')");
			
			
			return mysql_query("UPDATE persona SET fechaNac_per = '".utf8_decode(strtoupper($campos_personap[0]))."', apellidos_per='".utf8_decode(strtoupper($campos_personap[1]))."', nombres_per='".utf8_decode(strtoupper($campos_personap[2]))."', lugarNac_per = '".utf8_decode(strtoupper($campos_personap[3]))."', genero_per = '".$genero_per."', idDir_per= '".$direccion."' WHERE id_per = ".$per);
			
			
		 //return mysql_query("UPDATE persona SET fechaNac_per = '".utf8_decode(strtoupper($campos_personap[0]))."', apellidos_per='".utf8_decode(strtoupper($campos_personap[1]))."', nombres_per='".utf8_decode(strtoupper($campos_personap[2]))."', lugarNac_per = '".utf8_decode(strtoupper($campos_personap[3]))."', genero_per = '".$genero_per."', idDir_per= '".$direccion."' WHERE id_per = ".$per);
			
			
		}
	}
	
	
	function insertar_padres_pre2($campos_padrespre,$personas,$padre)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=2;
		$consulta= "SELECT id_asp FROM aspirantes WHERE idPer_asp='".$campos_padrespre[12]."'"; 
        $resultado= mysql_query($consulta);
        $fila=mysql_fetch_array($resultado);
      $id_aspirante=$fila['id_asp'];
	  
	
		//$rs6 = mysql_query("SELECT MAX(id_per) FROM persona");   		
		//if ($row = mysql_fetch_row($rs6))
		//{ $id_per_pad = trim($row[0]); }
		
		//	return mysql_query("insert into padres_preinscripcion (cedula_padPre,lugarTra_padPre, actiTra_padPre, profesion_padPre, direccionTra_padPre, telefonoTra_padPre, nivelAca_padPre, representante, estadoCiv_padPre, autorizadoRet,ex_estudiante, promocion, idTip_padPre, idPer_padPre,idasp_pad)  VALUES ('".utf8_decode(strtoupper($campos_padrespre[0]))."', '".utf8_decode(strtoupper($campos_padrespre[1]))."','".utf8_decode(strtoupper($campos_padrespre[2]))."','".utf8_decode(strtoupper($campos_padrespre[3]))."','".utf8_decode(strtoupper($campos_padrespre[4]))."','".utf8_decode(strtoupper($campos_padrespre[5]))."','".utf8_decode(strtoupper($campos_padrespre[6]))."','".utf8_decode(strtoupper($campos_padrespre[7]))."','".utf8_decode(strtoupper($campos_padrespre[8]))."','".utf8_decode(strtoupper($campos_padrespre[9]))."','".utf8_decode(strtoupper($campos_padrespre[10]))."','".utf8_decode(strtoupper($campos_padrespre[11]))."','".$genero_per."','".$id_per_pad."','".$id_aspirante."')");
			
			
			return mysql_query("UPDATE padres_preinscripcion SET cedula_padPre = '".utf8_decode(strtoupper($campos_padrespre[0]))."', lugarTra_padPre='".utf8_decode(strtoupper($campos_padrespre[1]))."', actiTra_padPre='".utf8_decode(strtoupper($campos_padrespre[2]))."', profesion_padPre = '".utf8_decode(strtoupper($campos_padrespre[3]))."', direccionTra_padPre = '".utf8_decode(strtoupper($campos_padrespre[4]))."', telefonoTra_padPre = '".utf8_decode(strtoupper($campos_padrespre[5]))."', nivelAca_padPre = '".utf8_decode(strtoupper($campos_padrespre[6]))."', representante='".utf8_decode(strtoupper($campos_padrespre[7]))."', estadoCiv_padPre='".utf8_decode(strtoupper($campos_padrespre[8]))."', autorizadoRet='".utf8_decode(strtoupper($campos_padrespre[9]))."', ex_estudiante='".utf8_decode(strtoupper($campos_padrespre[10]))."', promocion='".utf8_decode(strtoupper($campos_padrespre[11]))."',idTip_padPre='".$genero_per."',idPer_padPre='".$personas."', idasp_pad='".$id_aspirante."' WHERE id_padPre = ".$padre);
		}
	}
	
	
	
	
	function actualizar_aspirante1($campos_actualizar,$id_per)
	{
		if($this->con->conectar()==true)
		{
		$rs7 = mysql_query("SELECT MAX(id_dir)  FROM direccion");   		
		if ($row = mysql_fetch_row($rs7))
		{ $id7 = trim($row[0]); }
		 
		     
			return mysql_query("UPDATE aspirantes SET viveCon_asp = '".utf8_decode(strtoupper($campos_actualizar[0]))."', otro_familiar='".utf8_decode(strtoupper($campos_actualizar[1]))."', porque_asp='".utf8_decode(strtoupper($campos_actualizar[2]))."', numeroHer_asp = '".utf8_decode(strtoupper($campos_actualizar[3]))."', lugarOcu_asp = '".utf8_decode(strtoupper($campos_actualizar[4]))."', hermano_ex_estudiante = '".utf8_decode(strtoupper($campos_actualizar[5]))."', promocion = '".utf8_decode(strtoupper($campos_actualizar[6]))."', familiarAct_asp='".utf8_decode(strtoupper($campos_actualizar[7]))."', gradoFam_asp='".utf8_decode(strtoupper($campos_actualizar[8]))."', bautizado_asp='".utf8_decode(strtoupper($campos_actualizar[9]))."', primeraCom_asp='".utf8_decode(strtoupper($campos_actualizar[10]))."', huerfano_asp='".utf8_decode(strtoupper($campos_actualizar[11]))."',idDir_asp='".($id7)."' WHERE idPer_asp = ".$id_per);
			  
		}
	}
	
	function actualizar_aspirante_actualizar($campos_actualizar,$id_per,$dir)
	{
		if($this->con->conectar()==true)
		{
		$rs7 = mysql_query("SELECT MAX(id_dir)  FROM direccion");   		
		if ($row = mysql_fetch_row($rs7))
		{ $id7 = trim($row[0]); }
		 
		     
			return mysql_query("UPDATE aspirantes SET viveCon_asp = '".utf8_decode(strtoupper($campos_actualizar[0]))."', otro_familiar='".utf8_decode(strtoupper($campos_actualizar[1]))."', porque_asp='".utf8_decode(strtoupper($campos_actualizar[2]))."', numeroHer_asp = '".utf8_decode(strtoupper($campos_actualizar[3]))."', lugarOcu_asp = '".utf8_decode(strtoupper($campos_actualizar[4]))."', hermano_ex_estudiante = '".utf8_decode(strtoupper($campos_actualizar[5]))."', promocion = '".utf8_decode(strtoupper($campos_actualizar[6]))."', familiarAct_asp='".utf8_decode(strtoupper($campos_actualizar[7]))."', gradoFam_asp='".utf8_decode(strtoupper($campos_actualizar[8]))."', bautizado_asp='".utf8_decode(strtoupper($campos_actualizar[9]))."', primeraCom_asp='".utf8_decode(strtoupper($campos_actualizar[10]))."', huerfano_asp='".utf8_decode(strtoupper($campos_actualizar[11]))."',idDir_asp='".($dir)."' WHERE idPer_asp = ".$id_per);
			  
		}
	}
	
	function actualizar_aspirante2($campos_actualizar)
	{
		if($this->con->conectar()==true)
		{
		$rs7 = mysql_query("SELECT MAX(id_dir)  FROM direccion");   		
		if ($row = mysql_fetch_row($rs7))
		{ $id7 = trim($row[0]); }
		
			return mysql_query("UPDATE aspirantes SET viveCon_asp = '".utf8_decode(strtoupper($campos_actualizar[0]))."', porque_asp='".utf8_decode(strtoupper($campos_actualizar[1]))."', numeroHer_asp = '".utf8_decode(strtoupper($campos_actualizar[2]))."', lugarOcu_asp = '".utf8_decode(strtoupper($campos_actualizar[3]))."', hermano_ex_estudiante = '".utf8_decode(strtoupper($campos_actualizar[4]))."', promocion = '".utf8_decode(strtoupper($campos_actualizar[5]))."', familiarAct_asp='".utf8_decode(strtoupper($campos_actualizar[6]))."', gradoFam_asp='".utf8_decode(strtoupper($campos_actualizar[7]))."', bautizado_asp='".utf8_decode(strtoupper($campos_actualizar[8]))."', primeraCom_asp='".utf8_decode(strtoupper($campos_actualizar[9]))."', huerfano_asp='".utf8_decode(strtoupper($campos_actualizar[10]))."', idDir_asp='".($id7)."', grado_va='".utf8_decode(strtoupper($campos_actualizar[11]))."' WHERE id_per = ".$id_per);
		}
	}
	
	
	function actualizar_aspirante3($campos_actualizar)
	{
		if($this->con->conectar()==true)
		{
		$rs7 = mysql_query("SELECT MAX(id_dir)  FROM direccion");   		
		if ($row = mysql_fetch_row($rs7))
		{ $id7 = trim($row[0]); }
		
			return mysql_query("UPDATE aspirantes SET viveCon_asp = '".utf8_decode(strtoupper($campos_actualizar[0]))."', porque_asp='".utf8_decode(strtoupper($campos_actualizar[1]))."', numeroHer_asp = '".utf8_decode(strtoupper($campos_actualizar[2]))."', lugarOcu_asp = '".utf8_decode(strtoupper($campos_actualizar[3]))."', hermano_ex_estudiante = '".utf8_decode(strtoupper($campos_actualizar[4]))."', promocion = '".utf8_decode(strtoupper($campos_actualizar[5]))."', familiarAct_asp='".utf8_decode(strtoupper($campos_actualizar[6]))."', gradoFam_asp='".utf8_decode(strtoupper($campos_actualizar[7]))."', bautizado_asp='".utf8_decode(strtoupper($campos_actualizar[8]))."', primeraCom_asp='".utf8_decode(strtoupper($campos_actualizar[9]))."', huerfano_asp='".utf8_decode(strtoupper($campos_actualizar[10]))."', idDir_asp='".($id7)."', grado_va='".utf8_decode(strtoupper($campos_actualizar[11]))."' WHERE id_per = ".$id_per);
		}
	}
	
	
	
	
	function insertar_persona_padre($campos_personap)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=2;
		
		$rs5 = mysql_query("SELECT MAX(id_dir) FROM direccion");   		
		if ($row = mysql_fetch_row($rs5))
		{ $id_dir = trim($row[0]); }
		
			return mysql_query("insert into persona (fechaNac_per, apellidos_per, nombres_per, lugarNac_per, genero_per, idDir_per)  VALUES ('".utf8_decode(strtoupper($campos_personap[0]))."', '".utf8_decode(strtoupper($campos_personap[1]))."','".utf8_decode(strtoupper($campos_personap[2]))."','".utf8_decode(strtoupper($campos_personap[3]))."','".$genero_per."','".$id_dir."')");
		}
	}
	
	function insertar_persona_madre($campos_personap)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=3;
		
		$rs5 = mysql_query("SELECT MAX(id_dir) FROM direccion");   		
		if ($row = mysql_fetch_row($rs5))
		{ $id_dir = trim($row[0]); }
		
			return mysql_query("insert into persona (fechaNac_per, apellidos_per, nombres_per, lugarNac_per, genero_per, idDir_per)  VALUES ('".utf8_decode(strtoupper($campos_personap[0]))."', '".utf8_decode(strtoupper($campos_personap[1]))."','".utf8_decode(strtoupper($campos_personap[2]))."','".utf8_decode(strtoupper($campos_personap[3]))."','".utf8_decode(strtoupper($genero_per))."','".$id_dir."')");
		}
	}
	
	function insertar_padres_pre($campos_padrespre)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=2;
		$consulta= "SELECT id_asp FROM aspirantes WHERE idPer_asp='".$campos_padrespre[12]."'"; 
        $resultado= mysql_query($consulta);
        $fila=mysql_fetch_array($resultado);
      $id_aspirante=$fila['id_asp'];
	  
	
		$rs6 = mysql_query("SELECT MAX(id_per) FROM persona");   		
		if ($row = mysql_fetch_row($rs6))
		{ $id_per_pad = trim($row[0]); }
		
			return mysql_query("insert into padres_preinscripcion (cedula_padPre,lugarTra_padPre, actiTra_padPre, profesion_padPre, direccionTra_padPre, telefonoTra_padPre, nivelAca_padPre, representante, estadoCiv_padPre, autorizadoRet,ex_estudiante, promocion, idTip_padPre, idPer_padPre,idasp_pad)  VALUES ('".utf8_decode(strtoupper($campos_padrespre[0]))."', '".utf8_decode(strtoupper($campos_padrespre[1]))."','".utf8_decode(strtoupper($campos_padrespre[2]))."','".utf8_decode(strtoupper($campos_padrespre[3]))."','".utf8_decode(strtoupper($campos_padrespre[4]))."','".utf8_decode(strtoupper($campos_padrespre[5]))."','".utf8_decode(strtoupper($campos_padrespre[6]))."','".utf8_decode(strtoupper($campos_padrespre[7]))."','".utf8_decode(strtoupper($campos_padrespre[8]))."','".utf8_decode(strtoupper($campos_padrespre[9]))."','".utf8_decode(strtoupper($campos_padrespre[10]))."','".utf8_decode(strtoupper($campos_padrespre[11]))."','".$genero_per."','".$id_per_pad."','".$id_aspirante."')");
		}
	}
	
	
	function insertar_madres_pre($campos_madrespre)
	{
		if($this->con->conectar()==true)
		{
		$genero_per=3;
		$consulta= "SELECT id_asp FROM aspirantes WHERE idPer_asp='".$campos_madrespre[12]."'"; 
        $resultado= mysql_query($consulta);
        $fila=mysql_fetch_array($resultado);
      $id_aspirante=$fila['id_asp'];
	  
	
		$rs6 = mysql_query("SELECT MAX(id_per) FROM persona");   		
		if ($row = mysql_fetch_row($rs6))
		{ $id_per_pad = trim($row[0]); }
		
			return mysql_query("insert into padres_preinscripcion (cedula_padPre,lugarTra_padPre, actiTra_padPre, profesion_padPre, direccionTra_padPre, telefonoTra_padPre, nivelAca_padPre, representante, estadoCiv_padPre, autorizadoRet,ex_estudiante, promocion, idTip_padPre, idPer_padPre,idasp_pad)  VALUES ('".utf8_decode(strtoupper($campos_madrespre[0]))."', '".utf8_decode(strtoupper($campos_madrespre[1]))."','".utf8_decode(strtoupper($campos_madrespre[2]))."','".utf8_decode(strtoupper($campos_madrespre[3]))."','".utf8_decode(strtoupper($campos_madrespre[4]))."','".utf8_decode(strtoupper($campos_madrespre[5]))."','".utf8_decode(strtoupper($campos_madrespre[6]))."','".utf8_decode(strtoupper($campos_madrespre[7]))."','".utf8_decode(strtoupper($campos_madrespre[8]))."','".utf8_decode(strtoupper($campos_madrespre[9]))."','".utf8_decode(strtoupper($campos_madrespre[10]))."','".utf8_decode(strtoupper($campos_madrespre[11]))."','".$genero_per."','".$id_per_pad."','".$id_aspirante."')");
		}
	}
	
	
	
		function insertar_escolaridad($campos_escolaridad)
	{
		if($this->con->conectar()==true)
		{
			//print_r($campos);
			//echo "INSERT INTO cliente (nombres, ciudad, sexo, telefono, fecha_nacimiento) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO escolaridad_aspirante (causaCam_escAsp,gradosCur_escAsp,anoCur_escAsp,institucion,ciudad,idAsp_escAsp) VALUES ('".utf8_decode(strtoupper($campos_escolaridad[0]))."', '".utf8_decode(strtoupper($campos_escolaridad[1]))."','".utf8_decode(strtoupper($campos_escolaridad[2]))."','".utf8_decode(strtoupper($campos_escolaridad[3]))."','".utf8_decode(strtoupper($campos_escolaridad[4]))."','".utf8_decode(strtoupper($campos_escolaridad[5]))."')");
			//$consulta= "SELECT max(id_per)as id_perultimo persona"; 
			  //  $resultado= mysql_query($consulta);
               // $fila=mysql_fetch_array($resultado);
				
				//$id_perultimo = $fila['id_perultimo'];
			//return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,idPer_usu) VALUES ('".$campos[6]."', '".$campos[7]."', '".$id_perultimo."')");
				
			
			
			//return mysql_query("INSERT INTO persona (cedula_per, apellido_per,nombres_per,lugarNac_per,fechaNac_per) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}
	
	
	
	function insertar_usuario($campos_usuarios){
		if($this->con->conectar()==true){
			//$rs1= mysql_query("SELECT  max(id_per) as id_perultimo  from persona ");
			
			 
		$rs1 = mysql_query("SELECT MAX(idpersonas) FROM personas");   		
		if ($row = mysql_fetch_row($rs1))
		{ $id1 = trim($row[0]); }
		return mysql_query("insert into usuario (usuario,contrasena,idtipo_usuario,idpersonas) values('".$campos_usuarios[0]."', '".$campos_usuarios[1]."','".$campos_usuarios[2]."','".$id1."')");
		
		//($sql1);
			
 //$fila=mysql_fetch_array($rs1);
//$id_perul = $fila['id_perultimo'];
			//if ($row = mysql_fetch_row($rs1))
		     // { $id1 = trim($row[0]+1); }
			   
			// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,apellidos_usu,nombres_usu,idPer_usu)             VALUES ('".$campos_nuevos[0]."', '".$campos_nuevos[1]."','".$campos_nuevos[2]."','".$campos_nuevos[3]."','".$idperul."')");
				
			
		}
	}
	
	function insertar_usuarios($campos_usuarios){
		if($this->con->conectar()==true){
			//$rs1= mysql_query("SELECT  max(id_per) as id_perultimo  from persona ");
			
			 
		$rs1 = mysql_query("SELECT MAX(idpersonas) FROM personas");   		
		if ($row = mysql_fetch_row($rs1))
		{ $id1 = trim($row[0]); }
		return mysql_query("insert into usuario (usuario,contrasena,idtipo_usuario,idpersonas) values('".$campos_usuarios[0]."', '".$campos_usuarios[1]."','".$campos_usuarios[2]."','".$id1."')");
		
		//($sql1);
			
 //$fila=mysql_fetch_array($rs1);
//$id_perul = $fila['id_perultimo'];
			//if ($row = mysql_fetch_row($rs1))
		     // { $id1 = trim($row[0]+1); }
			   
			// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,apellidos_usu,nombres_usu,idPer_usu)             VALUES ('".$campos_nuevos[0]."', '".$campos_nuevos[1]."','".$campos_nuevos[2]."','".$campos_nuevos[3]."','".$idperul."')");
				
			
		}
	}
	
	function actualizar($campos,$id_per){
		if($this->con->conectar()==true){
			//print_r($campos);
			return mysql_query("UPDATE persona SET cedula_per = '".utf8_decode(strtoupper($campos[0]))."', apellidos_per = '".utf8_decode(strtoupper($campos[1]))."', nombres_per = '".utf8_decode(strtoupper($campos[2]))."', lugarNac_per = '".utf8_decode(strtoupper($campos[3]))."', fechaNac_per = '".utf8_decode(strtoupper($campos[4]))."' WHERE id_per = ".$id_per);
		}
	}
	
	function actualizar_escolaridad($campos,$id_escolaridad){
		if($this->con->conectar()==true){
			//print_r($campos);
			return mysql_query("UPDATE escolaridad_aspirante SET causaCam_escAsp = '".utf8_decode(strtoupper($campos[0]))."', gradosCur_escAsp = '".utf8_decode(strtoupper($campos[1]))."', anoCur_escAsp = '".utf8_decode(strtoupper($campos[2]))."', institucion = '".utf8_decode(strtoupper($campos[3]))."', ciudad = '".utf8_decode(strtoupper($campos[4]))."' WHERE id_escAsp= ".$id_escolaridad);
		}
	}
	
	
	function mostrar_persona($id_per){
		if($this->con->conectar()==true){
			return mysql_query("select usuario.usuario, usuario.contrasena,usuario.idpersonas, usuario.idtipo_usuario, usuario.id_usuario, personas. apellidos, personas.nombres, personas.cedula, personas.funcion, tipo_usuario.tipo_usuario, tipo_usuario.idtipo_usuario, privilegios_usuarios.ingresar_todos, privilegios_usuarios.modificar_todos, privilegios_usuarios.eliminar_todos, privilegios_usuarios.ingresar_indicador1, privilegios_usuarios.modificar_indicador1, privilegios_usuarios.ingresar_evidencias,privilegios_usuarios.modificar_evidencias,privilegios_usuarios.eliminar_evidencias,privilegios_usuarios.consulta_general,privilegios_usuarios.evaluar, privilegios_usuarios.idusuario, privilegios_usuarios.idindicador_principal from usuario,personas,tipo_usuario, privilegios_usuarios where personas.idpersonas='".$id_per."' and usuario.idpersonas='".$id_per."' and usuario.idtipo_usuario=tipo_usuario.idtipo_usuario and usuario.id_usuario=privilegios_usuarios.idusuario ");
		}
	}
	
	
	function mostrar_privilegios($id_per){
		if($this->con->conectar()==true){
			return mysql_query("SELECT usuario.idpersonas,privilegios_usuarios.idusuario, usuario.id_usuario  FROM usuario,privilegios_usuarios where privilegios_usuarios.idusuario= usuario.id_usuario and usuario.idpersonas='".$id_per."'");
		}
	}
	
	function mostrar_eliminar1($idindicador_principal){
		if($this->con->conectar()==true){
			return mysql_query("select *from indicador1 where idindicador_principal='".$idindicador_principal."'");
		}
	}
	
	function mostrar_eliminar2($idindicador1){
		if($this->con->conectar()==true){
			return mysql_query("select *from indicador2 where idindicador1='".$idindicador1."'");
		}
	}
	
	
	function mostrar_eliminar3($idindicador2){
		if($this->con->conectar()==true){
			return mysql_query("select *from evidencias where idindicador2='".$idindicador2."'");
		}
	}
	
	
	function mostrar_datos_evidencias($idevidencias){
		if($this->con->conectar()==true){
			return mysql_query("select *from evidencias where idevidencias='".$idevidencias."'");
		}
	}
	
	function mostrar_datos_parametros($idevaluacion){
		if($this->con->conectar()==true){
			return mysql_query("select *from evaluacion where idevaluacion='".$idevaluacion."'");
		}
	}
	function mostrar_conteo1($idindicador_principal){
		if($this->con->conectar()==true){
			return mysql_query("select count(idindicador1) as cont from indicador1 where idindicador_principal='".$idindicador_principal."'");
		}
	}
	function mostrar_conteo2($idindicador1){
		if($this->con->conectar()==true){
			return mysql_query("select count(idindicador2) as cont1 from indicador2 where idindicador1='".$idindicador1."'");
		}
	}
	function mostrar_conteo3($idindicador2){
		if($this->con->conectar()==true){
			return mysql_query("select count(idevidencias) as cont2 from evidencias where idindicador2='".$idindicador2."'");
		}
	}
	
	function mostrar_conteo33($idind){
		if($this->con->conectar()==true){
			return mysql_query("select count(idevidencias) as cont2 from evidencias where idindicador2='".$idind."'");
		}
	}
	
	function mostrar_indicador(){
		if($this->con->conectar()==true){
			return mysql_query("select idindicador_principal, descripción from indicador_principal");
		}
	}
	
	function mostrar_esco($id_escAsp,$id_usu){
		if($this->con->conectar()==true){
			return mysql_query("SELECT escolaridad_aspirante.id_escAsp, escolaridad_aspirante.idAsp_escAsp, escolaridad_aspirante.causaCam_escAsp, escolaridad_aspirante.anoCur_escAsp, escolaridad_aspirante.gradosCur_escAsp,escolaridad_aspirante.ciudad, escolaridad_aspirante.institucion  FROM escolaridad_aspirante WHERE escolaridad_aspirante.idAsp_escAsp= '".$id_usu."' and escolaridad_aspirante.id_escAsp= '".$id_escAsp."'");
		}
	}
	
	
	function mostrar_cliente($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM cliente WHERE id=".$id);
		}
	}

	function mostrar_clientes(){
		if($this->con->conectar()==true){
			return mysql_query("select personas.apellidos, personas.nombres, personas.cedula, personas.idpersonas, personas.funcion, usuario.usuario, tipo_usuario.tipo_usuario from personas,usuario,tipo_usuario where usuario.idpersonas=personas.idpersonas and tipo_usuario.idtipo_usuario=usuario.idtipo_usuario order by personas.idpersonas desc");
		}
	}

    function principal($id_indicador){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM indicador_principal WHERE idindicador_principal=".$id_indicador);
		}
	}
	
	function nivel2($id_indicador){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM indicador1 WHERE idindicador1=".$id_indicador);
		}
	}
	
	
	
	function nivel3($id_indicador){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM indicador2 WHERE idindicador2=".$id_indicador);
		}
	}
	
    function mostrar_indicadorprin($id_indicador)
    {

    	if($this->con->conectar()==true)
    	{

    		return mysql_query("SELECT * from indicador_principal WHERE idindicador_principal".$id_indicador);
    	}
    }


	function mostrar_indicadorespri(){
		if($this->con->conectar()==true){
			return mysql_query("select *from indicador_principal ");
		}
	}
	
	function mostrar_indicadorespri_extra(){
		if($this->con->conectar()==true){
			return mysql_query("select *from indicador_principal where idindicador_principal=1 or idindicador_principal=2 or idindicador_principal=3 or idindicador_principal=4 ");
		}
	}
	
	function mostrar_indicadorespri_extra2(){
		if($this->con->conectar()==true){
			return mysql_query("select *from indicador_principal where idindicador_principal=5 ");
		}
	}


	function eliminar($id_per){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from personas WHERE idpersonas=".$id_per);
			
		}
	}
	
	function eliminar_principal($idindicador_principal){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from indicador_principal WHERE idindicador_principal=".$idindicador_principal);
			
		}
	}
	
	function eliminar_indicador1($idindicador1){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from indicador1 WHERE idindicador_principal=".$idindicador_principal);
			
		}
	}
	
	
	
	
	function eliminar_indi1($idindicador1){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from indicador1 WHERE idindicador1=".$idindicador1);
			
		}
	}
	
	function eliminar_todos($idindicador2){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from indicador2 WHERE idindicador2=".$idindicador2);
			
		}
	}
	

	function eliminar_evidencia($idindicador2){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from evidencias WHERE idindicador2=".$idindicador2);
			
		}
	}
	
	function eliminar_evidencia_todo($idevidencias){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from evidencias WHERE idevidencias=".$idevidencias);
			
		}
	}
	
	function eliminar_parametros_todo($idevaluacion){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from evaluacion WHERE idevaluacion=".$idevaluacion);
			
		}
	}
	
	function eliminar_privilegios ($id_usuario){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from privilegios_usuarios WHERE idusuario=".$id_usuario);
			
		}
	}
	function eliminar_escolaridad($id_escAsp){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from escolaridad_aspirante WHERE id_escAsp=".$id_escAsp);
			
		}
	}
	
	function eliminar_usuario($idpersonas){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from usuario WHERE idpersonas=".$idpersonas);
		}
	}
	
	function eliminar_aspirante($id_per){
		if($this->con->conectar()==true){
			return mysql_query("DELETE from  WHERE idPer_asp=".$id_per);
		}
	}
	function mostrar_escolaridad($id_per){
		if($this->con->conectar()==true){
			return mysql_query("SELECT distinct escolaridad_aspirante.id_escAsp, escolaridad_aspirante.idAsp_escAsp, escolaridad_aspirante.causaCam_escAsp, escolaridad_aspirante.anoCur_escAsp, escolaridad_aspirante.gradosCur_escAsp,escolaridad_aspirante.institucion, escolaridad_aspirante.ciudad FROM escolaridad_aspirante WHERE escolaridad_aspirante.idAsp_escAsp= '".$id_per."' ");
		}
	}
	
	function mostrar_subnivel($idindicador_principal){
		if($this->con->conectar()==true){
			return mysql_query("select indicador_principal.descripcion, indicador1.idindicador1, indicador1.descripcion_indicador1, indicador1.idindicador_principal,indicador1.codigo,indicador1.descripcion_corta from indicador1, indicador_principal where indicador_principal.idindicador_principal='".$idindicador_principal."' and indicador1.idindicador_principal='".$idindicador_principal."'" );
		}
	}
     

  

	//FUNCIONES SISTEMA INSCRIPCION

     function mostrar_aspirantes($idrepresentante){
		if($this->con->conectar()==true){
			return mysql_query("select  * from aspirantes,aspirantes_has_representantes,personas where aspirantes_has_representantes.representantes_idrepresentantes=2 and aspirantes.idaspirantes=aspirantes_has_representantes.aspirantes_idaspirante and personas.idpersonas=aspirantes.personas_idpersonas" );
		}
	}


	
	function mostrar_subnivel2($idindicador1){
		if($this->con->conectar()==true){
		
		return mysql_query("select indicador1.descripcion_indicador1, indicador1.idindicador1, indicador2.descripcion_indicador2, indicador2.idindicador2,indicador2.codigo_indicador2 from indicador2, indicador1 where indicador1.idindicador1='".$idindicador1."' and indicador2.idindicador1='".$idindicador1."'" );
			
		}
	}
	
	function mostrar_evidencias($idindicador2){
		if($this->con->conectar()==true){
		
		return mysql_query("select * from evidencias where idindicador2='".$idindicador2."' order by idevidencias desc" );
			
		}
	}
	
	function mostrar_parametros($idindicador2){
		if($this->con->conectar()==true){
		
		return mysql_query("select * from evaluacion where idindicador2='".$idindicador2."'" );
			
		}
	}
	function insertar_cedula($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			 // if($campos[3]=="")
			  //{
				  	// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,idPer_usu) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."')");
				  
			 // }
			//else
			// if($campos[3]== $campos[2] )
			 //{
			return mysql_query("UPDATE usuario SET  usuario_usu = '".$campos[0]."', contrasena_usu = '".md5($campos[1])."' WHERE idPer_usu = ".$campos[2]);
			
			
			 //}
			 
			
			
		}
	} 
		function actualizar_cedula_asp($campos_usuarios){
		if($this->con->conectar()==true){
			//print_r($campos);
			 // if($campos[3]=="")
			  //{
				  	// return mysql_query("INSERT INTO usuario (usuario_usu,contrasena_usu,idPer_usu) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."')");
				  
			 // }
			//else
			// if($campos[3]== $campos[2] )
			 //{
			return mysql_query("UPDATE aspirantes SET  cedula_asp = '". $campos_usuarios[0]."', grado_va= '". utf8_decode(strtoupper($campos_usuarios[1]))."', institucion_viene='". utf8_decode(strtoupper($campos_usuarios[2]))."' WHERE idPer_asp = ".$campos_usuarios[3]);
			
			
			 //}
			 
			
			
		}
	} 
	
	
	
}
?>