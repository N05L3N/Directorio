<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		echo "<h2>".$TEXT['cds-error']."</h2>";
			die();
	}
	mysql_select_db("cdcol");

?>
<?php 
	$cbajas_sucursal = $_SESSION["cbajas_sucursal"]; 
?>
<div id="nav-lateral">

	<h2>Buscar por Sucursals</h2>
	
	<form action="controller/cbajas.sucursal.php" method="post">
		<label for="mlSucursal">Sucursal:</label>
		<br />
		<select name="cbajas_sucursal" id="" onchange="this.form.submit();">
			<option value=""></option>
			<?php include('model/mbajas.option.sucursales.php');?>
		</select>
	</form>

	<hr />
		
<?php 
	if ($cbajas_sucursal == '') {
		echo '<div id="sSinSucursal"></div>';
	}

	else if ($cbajas_sucursal == 'Chihuahua') {
		/*
	echo '<div id="sChihuahua" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value=""></option>
				<option value="Almacén">Almacén</option>
				<option value="Auditoría">Auditoría</option>
				<option value="Cajas">Cajas</option>
				<option value="Calidad">Calidad</option>
				<option value="Caseta">Caseta</option>
				<option value="Cat">Cat</option>
				<option value="CEDIS">CEDIS</option>
				<option value="Compras">Compras</option>
				<option value="Contabilidad">Contabilidad</option>
				<option value="Crédito y Cobranza">Crédito y Cobranza</option>
				<option value="Desarrollo de Productos">Desarrollo de Productos</option>
				<option value="Diseño">Diseño</option>
				<option value="Mercadotecnia">Mercadotecnia</option>
				<option value="Equipo">Equipo</option>
				<option value="Kumasoftware">Kumasoftware</option>
				<option value="Mantenimiento">Mantenimiento</option>
				<option value="Mostrador">Mostrador</option>
				<option value="Reabastecimiento">Reabastecimiento</option>
				<option value="Servicio al Cliente">Servicio al Cliente</option>
				<option value="Sistemas">Sistemas</option>
				<option value="Soporte Técnico">Soporte Técnico</option>
				<option value="Ventas Campo">Ventas Campo </option>
				<option value="Ventas Telemarketing">Ventas Telemarketing</option>
				<option value="Vigilancia">Vigilancia</option>
			</select>
			<hr />

		</div>';	*/
		include('model/mbajas.chihuahua.php');
	}

	else if ($cbajas_sucursal == 'Aguascalientes') {
		echo '
		<div id="sAguascalientes" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
			<hr />
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Culiácan') {
		echo '
		<div id="sCuliácan" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
			<hr />
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Culiácan') {
		echo '
		<div id="sCuliácan" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Durango') {
		echo '
		<div id="sDurango" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Estado de México') {
		echo '
		<div id="sEstado de México" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Guadalajara') {
		echo '
		<div id="sHermosillo" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Hermosillo') {
		echo '
		<div id="sHermosillo" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Juarez') {
		echo '
		<div id="sJuarez" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'León') {
		echo '
		<div id="sLeón" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Mexicali') {
		echo '
		<div id="sMexicali" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Monterrey') {
		echo '
		<div id="sMonterrey" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Obregón') {
		echo '
		<div id="sObregón" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Puebla') {
		echo '
		<div id="sPuebla" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Querétaro') {
		echo '
		<div id="sQuerétaro" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Saltillo') {
		echo '
		<div id="sSaltillo" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'San Luis Potosí') {
		echo '
		<div id="sSan Luis Potosí" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Tijuana') {
		echo '
		<div id="sTijuana" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Torreón') {
		echo '
		<div id="sTorreón" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}
	else if ($cbajas_sucursal == 'Veracruz') {
		echo '
		<div id="sVeracruz" style="display:block;">
			<label for="mlDepartamento">Departamento:</label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		';
	}

	else {
		echo 'else';
	}
?>
<!-- Termina: Menú Lateral-->
</div>