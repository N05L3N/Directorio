<div class="spacer"></div>
<?php include('inc/menu-lateral.php'); ?>
<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);
		$sqlid = $_SESSION["mlpersonal"];
		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE id =  '$sqlid' ORDER BY nombre1 ASC limit 0,1");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			$edit_id =  $row3['id'];
			$edit_nombre1 =  $row3['nombre1'];
			$edit_nombre2 =  $row3['nombre2'];
			$edit_apellido1 =  $row3['apellido1'];
			$edit_apellido2 =  $row3['apellido2'];
			$edit_num_empleado =  $row3['num_empleado'];
			$edit_imss =  $row3['imss'];
			$edit_puesto =  $row3['puesto'];
			$edit_departamento =  $row3['departamento'];
			$edit_sucursal =  $row3['sucursal'];
			$edit_telefono =  $row3['telefono'];
			$edit_ext =  $row3['ext'];
			$edit_fecha_ingreso =  $row3['fecha_ingreso'];
			$edit_fecha_baja =  $row3['fecha_baja'];
			$edit_usuario =  $row3['usuario'];
			$edit_email =  $row3['email'];
			$edit_alias =  $row3['alias'];
			$edit_contra =  $row3['contra'];
			$edit_llave =  $row3['llave'];
			$edit_hora_captura =  $row3['hora_captura'];
			$edit_fecha_captura =  $row3['fecha_captura'];
		}
		$i++;
	}
?>
<div id="login">
<?php
	if ($edit_nombre1 == '') {
?>
<h3>Seleccione por sucursal o nombre el personal que desea actualizar.</h3>
<img src="img/Arrows-Left-2-icon.png" alt="" border="0"/> 
<?php
	}
	else {
?>
<center>
	<span id="bienvenida">DATOS DEL PERSONAL</span>
</center>
	<form action="actualizar.php" method="post">
		<input type="hidden" name="id" value="<?php echo $edit_id; ?>">
		<fieldset>
			<legend>Información Personal</legend>
		<table>
			<tr>
				<td>
					<label for="nombre1">Nombres:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_nombre1; ?>" placeholder="1er Nombre" id="campos" name="nombre1" style="border:yes;" />
				</td>
				<td>
					<input type="text" value="<?php echo $edit_nombre2; ?>" placeholder="2do Nombre" id="campos" name="nombre2" style="border:yes;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="apellido1">Apellidos:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_apellido1; ?>" placeholder="Apellido Paterno" id="campos" name="apellido1" style="border:yes;" />
				</td>
				<td>
					<input type="text" value="<?php echo $edit_apellido2; ?>" placeholder="Apellido Materno" id="campos" name="apellido2" style="border:yes;" />
				</td>
			</tr>
		</table>
		</fieldset>
		<fieldset>
			<legend>Información de la Empresa</legend>
		<table border="0" width="100%">
			<tr>
				<td width="30%">
					<label for="puesto">Puesto:</label>
				</td>
				<td width="70%">
					<input type="text" value="<?php echo $edit_puesto; ?>" placeholder="Puesto" id="campos" name="puesto" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="departamento">Departamento:</label>
				</td>
				<td>
					<select name="departamento" id="campo" style="border:yes; width:170px;">
						<option value="<?= $edit_departamento ?>" selected><?= $edit_departamento ?></option>
						<option value="Administrativos">Administrativos</option>
						<option value="Almacén">Almacén</option>
						<option value="Auditoría">Auditoría</option>
						<option value="Cajas">Cajas</option>
						<option value="Calidad">Recursos Humanos</option>
						<option value="Capacitación">Capacitación</option>
						<option value="Caseta">Caseta</option>
						<option value="Cat">Cat</option>
						<option value="CEDIS">CEDIS</option>
						<option value="Compras">Compras</option>
						<option value="Contabilidad">Contabilidad</option>
						<option value="Crédito y Cobranza">Crédito y Cobranza</option>
						<option value="Desarrollo de Productos">Desarrollo de Productos</option>
						<option value="Diseño">Diseño y Mercadotecnia</option>
						<option value="Dirección">Dirección</option>
						<option value="Encargado de Sucursal">Encargado de Sucursal</option>
						<!-- <option value="Mercadotecnia">Mercadotecnia</option> -->
						<option value="Equipo">Equipo</option>
						<option value="Kumasoftware">Kumasoftware</option>
						<option value="Mantenimiento">Mantenimiento</option>
						<option value="Mostrador">Mostrador</option>
						<!-- <option value="Reabastecimiento">Reabastecimiento</option> -->
						<option value="Servicio al Cliente">Servicio al Cliente</option>
						<option value="Sistemas">Sistemas</option>
						<option value="Soporte Técnico">Soporte Técnico</option>
						<option value="Ventas Campo">Ventas Campo </option>
						<option value="Ventas Mostrador">Ventas Mostrador</option>
						<option value="Ventas Telemarketing">Ventas Telemarketing</option>
						<option value="Vigilancia">Vigilancia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="sucursal">Sucursal:</label>
				</td>
				<td>
					<select name="sucursal" id="campo" style="border:yes; width:170px;">
						<option value="<?= $edit_sucursal ?>" selected><?= $edit_sucursal ?></option>
						<option value="Aguascalientes">Aguascalientes</option>
						<option value="Chihuahua">Chihuahua</option>
						<option value="Culiácan">Culiácan</option>
						<option value="Durango">Durango</option>
						<option value="Estado de México">Estado de México</option>
						<option value="Guadalajara">Guadalajara</option>
						<option value="Hermosillo">Hermosillo</option>
						<option value="Juarez">Juarez</option>
						<option value="León">León</option>
						<option value="Mexicali">Mexicali</option>
						<option value="Monterrey">Monterrey</option>
						<option value="Obregón">Obregón</option>
						<option value="Puebla">Puebla</option>
						<option value="Querétaro">Querétaro</option>
						<option value="Saltillo">Saltillo</option>
						<option value="San Luis Potosí">San Luis Potosí</option>
						<option value="Tijuana">Tijuana</option>
						<option value="Torreón">Torreón</option>
						<option value="Veracruz">Veracruz</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label for="telefono">Télefono:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_telefono; ?>" placeholder="Télefono"  id="campos" name="telefono" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="extension">Extensión:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_ext; ?>" placeholder="Extensión" id="campos" name="ext" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">Correo:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_email; ?>" placeholder="Correo" id="campos" name="email" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="alias">Alias:</label>
				</td>
				<td>
					<input type="text" value="<?php echo $edit_alias; ?>" placeholder="Alias" id="campos" name="alias" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="hidden" value="" name="confirm"/>
					<input type="button" value="Guardar" onclick="form.submit();" onfocus="javascript:this.form.confirm.value = 'confirm';">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
<?php
	}
?>	
</div>