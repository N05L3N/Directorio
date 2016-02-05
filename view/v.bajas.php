<div class="spacer"></div>
<?php include('inc/menu-lateral.bajas.php'); ?>
<div id="bajas">


<?php
	if ($baja_nombre1 != '') {
?>
<h3>Seleccione la sucursal del personal que desea dar de baja.</h3>
<img src="img/Arrows-Left-2-icon.png" alt="" border="0"/> 
<?php
	}
	else {
?>


<center>
	<span id="bienvenida">DATOS DEL PERSONAL</span>
	<h3>Sucursal <?php  echo $cbajas_sucursal;?></h3>
</center>
<ul>
<?php
	$sql_bajas_id = $_SESSION["mlpersonal"];
	#$result_bajas = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  '$sql_bajas_id'  ORDER BY nombre1 ASC limit 0,999");

	if ($cbajas_sucursal == 'Chihuahua') {
		$result_bajas = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  '$cbajas_sucursal' AND departamento = '$cbajas_departamento' AND llave != 'vSistema' ORDER BY nombre1 ASC");
	}

	else {
		$result_bajas = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  '$cbajas_sucursal' AND llave != 'vSistema' ORDER BY nombre1 ASC");
	}

	$i = 0;
	while ($row3 = mysql_fetch_array($result_bajas)) {
		if ($i > 0) { }
		$baja_id =  $row3['id'];
		$baja_nombre1 =  $row3['nombre1'];
		$baja_nombre2 =  $row3['nombre2'];
		$baja_apellido1 =  $row3['apellido1'];
		$baja_apellido2 =  $row3['apellido2'];
		$baja_num_empleado =  $row3['num_empleado'];
		$baja_imss =  $row3['imss'];
		$baja_puesto =  $row3['puesto'];
		$baja_departamento =  $row3['departamento'];
		$baja_sucursal =  $row3['sucursal'];
		$baja_telefono =  $row3['telefono'];
		$baja_ext =  $row3['ext'];
		$baja_fecha_ingreso =  $row3['fecha_ingreso'];
		$baja_fecha_baja =  $row3['fecha_baja'];
		$baja_usuario =  $row3['usuario'];
		$baja_email =  $row3['email'];
		$baja_alias =  $row3['alias'];
		$baja_contra =  $row3['contra'];
		$baja_llave =  $row3['llave'];
		$baja_hora_captura =  $row3['hora_captura'];
		$baja_fecha_captura =  $row3['fecha_captura'];

		echo '
	<li>
			<form id="formbajas" action="bajas.php" method="post">
			<input type="hidden" name="id" value="'.$baja_id.'">
			<table border="0" class="lista">
				<tr>
					<td class="nombre">'.$baja_nombre1.' '.$baja_nombre2.' '.$baja_apellido1.' '.$baja_apellido2.'</td>
					<td class="accion">
						<!--<img src="img/Delete-icon.png" alt="" border="0" />-->
						 <input type="hidden" value="" name="confirm"/> ';
		
		if ($baja_contra == 'baja') {
			echo '<input type="button" value="Dar de alta" class="alta" onclick="form.submit();" onfocus="javascript:this.form.confirm.value =\'alta\';">';
			#echo '<input type="button" value="Dar de alta" class="alta" onclick="bajaConfirmar();" onfocus="javascript:this.form.confirm.value =\'alta\';">';
		}

		else {
			#echo '<input type="button" value="Dar de baja" class="baja" onclick="bajaConfirmar();" onfocus="javascript:this.form.confirm.value =\'confirm\';">';
			echo '<input type="button" value="Dar de baja" class="baja" onclick="form.submit();" onfocus="javascript:this.form.confirm.value =\'confirm\';">';	
		}
		

		echo '
					</td>
				</tr>
			</table>
			</form>
	</li>';

	}

	$i++;
	echo '</ul>';

	}
?>	
</div>