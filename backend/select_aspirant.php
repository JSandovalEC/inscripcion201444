<?php
include_once("config/connection_bd.php");
conectar(); 


 $idre = $_SESSION['idrepresentantes'];

?>
<?php 
echo"<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";


require('clases/cliente.class.php');
$objCliente=new Cliente;
$consulta=$objCliente->mostrar_aspirantes($idre);
?>
<script type="text/javascript">
$(document).ready(function(){
	// mostrar formulario de actualizar datos
	$("table tr .modi a").click(function(){
		$('#tabla').hide();
		$("#formulario").show();
		$.ajax({
			url: this.href,
			type: "GET",
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});
	
	// llamar a formulario nuevo
	$("#nuevo a").click(function(){
		$("#formulario").show();
		$("#tabla").hide();
		$.ajax({
			type: "GET",
			url: 'nuevo_subniveles.php',
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});
});

</script>
<p><span id="nuevo"><a href="nuevo_subniveles.php" style="margin-left:18px;"><img src="../app/imagenes/blank_page.png" alt="Agregar dato" class="btnform"/></a></span><input type="hidden" name="usu" id="usu" value="<?php echo $usuario_ingreso?>" /></span></p>
 <input class="inputxt2" type="text" name="representante" id="representante" value="<?php echo $idre?>" />
	  </label>
<table width="50%" >
   		<tr>
   			
    		<th width="30">APELLIDOS</th>
    		<th width="30">NOMBRES</th>
    		
            <th width="10" ></th>
            <th width="10" ></th>
        </tr>
<?php


if($consulta) {
	while( $cliente = mysql_fetch_array($consulta) ){
	?>
	
		  <tr id="fila-<?php echo utf8_encode($cliente['idaspirantes']) ?>">
			
			  <td><?php echo ($cliente['apellidos']) ?></td>
              <td><?php echo ($cliente['nombres']) ?></td>
			 			  <td><span class="modi"><a href="actualizar_sub.php?idindicador1=<?php echo $cliente['idaspirantes'] ?>"><img src="../app/imagenes/edit.png" title="Editar" alt="Editar" class="btnform" /></a></span></td>
			  <td><span class="dele"><a onClick="EliminarDatoindicador1(<?php echo $cliente['idaspirantes'] ?>); return false" href="eliminar_indicador1.php?idindicador1=<?php echo $cliente['idaspirantes'] ?>"><img src="../app/imagenes/delete.png" title="Eliminar" alt="Eliminar"  class="btnform"/></a></span></td>
		  </tr>
	<?php
	}
}
?>
    </table> <br />