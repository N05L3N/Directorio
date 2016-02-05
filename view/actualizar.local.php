<div class="spacer"></div>
<?php include('inc/menu-lateral.php'); ?>
<div id="login">
	<center><span id="bienvenida">DATOS DEL PERSONAL</span></center>
	<form action="actualizar.php" method="post">
		<input type="hidden" name="id" value="">
		<fieldset>
			<legend>Información Personal</legend>
		<table>
			<tr>
				<td>
					<label for="nombre1">Nombres:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="nombre1" style="border:yes;" size="40" />
				</td>
				<td>
					<input type="text" value="" id="campo" name="nombre2" style="border:yes;" size="40" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="apellido1">Apellidos:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="apellido1" style="border:yes;" size="40" />
				</td>
				<td>
					<input type="text" value="" id="campo" name="apellido2" style="border:yes;" size="40" />
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
					<input type="text" value="" id="campo" name="puesto" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="departamento">Departamento:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="departamento"  style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="sucursal">Sucursal:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="sucursal"  style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="telefono">Télefono:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="telefono"  style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="extension">Extensión:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="extension"  style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">Correo:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="email"  style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="alias">Alias:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="alias" style="border:yes; width:250px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="alias">Confirmar cambio:</label>
				</td>
				<td>
					<input type="radio" value="confirm" name="confirm"/>
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="Guardar" onclick="form.submit();">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</div>