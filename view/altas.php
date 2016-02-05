<div class="spacer"></div>
<div id="login">
	<center>
<span id="bienvenida">DATOS DEL NUEVO PERSONAL</span>
</center>
	<form name="formaltas" action="altas.php" method="post" onSubmit="return validaCampos(this)">
		<input type="hidden" value="test" id="campo" name="imss" style="border:yes; width:170px;" />
		<input type="hidden" value="test" id="campo" name="fecha_baja"  style="border:yes; width:170px;" />
		<input type="hidden" value="test" id="campo" name="usuario" style="border:yes; width:170px;" />
		<input type="hidden" value="01" id="campo" name="fechacompradia" style="border:yes; width:170px;" />		
		<input type="hidden" value="01" id="campo" name="fechacomprames" style="border:yes; width:170px;" />		
		<input type="hidden" value="2000" id="campo" name="fechacompraano" style="border:yes; width:170px;" />		
		<fieldset>
			<legend>Información Personal</legend>
		<table>
			<tr>
				<td width="">
					<label for="nombre1">* Nombres:</label>
				</td>
				<td>
					<input type="text" value="" placeholder="1er Nombre" id="campo" name="nombre1" style="border:yes; width:170px;" />
				</td>
				<td>
					<input type="text" value="" placeholder="2do Nombre" id="campo" name="nombre2" style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="apellido1">* Apellidos:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="Apellido Paterno" name="apellido1" style="border:yes; width:170px;" />
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="Apellido Materno" name="apellido2" style="border:yes; width:170px;" />
				</td>
			</tr>
		</table>
		</fieldset>
		<fieldset>
			<legend>Información de la Empresa</legend>
		<table  width="100%">
			<tr>
				<td width="30%">
					<label for="puesto">* Puesto:</label>
				</td>
				<td width="70%">
					<input type="text" value="" id="campo" placeholder="Puesto" name="puesto" style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="departamento">* Departamento:</label>
				</td>
				<td>
					<select name="departamento" id="campo" style="border:yes; width:170px;">
						<option value=""></option>
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
						<!--<option value="Mercadotecnia">Mercadotecnia</option>-->
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
					<label for="sucursal">* Sucursal:</label>
				</td>
				<td>
					<select name="sucursal" id="campo" style="border:yes; width:170px;">
						<option value=""></option>
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
					<label for="telefono">Teléfono:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="Teléfono del departamento" name="telefono"  style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="extension">* Extensión:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="Extensión" name="ext"  style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">Correo:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="@avanceytec.com.mx" name="email"  style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="alias">Alias:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" placeholder="@avanceytec.com.mx" name="alias" style="border:yes; width:170px;" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<br>
					<input type="submit" class="guardar" value="Guardar">
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
</div>