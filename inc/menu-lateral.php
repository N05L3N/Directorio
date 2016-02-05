<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		echo "<h2>".$TEXT['cds-error']."</h2>";
			die();
	}
	mysql_select_db("cdcol");

?>
<div id="nav-lateral">	

	<h2>Buscar por Sucursal</h2>

	<p>
		Selecciona la Sucursal y el departamento del personal que desea actualizar.
	</p>
	
	<form action="">
		<label for="mlSucursal">Sucursal:</label>
		<br />
		<select name="mlSucursal" id="" onchange="sucursalOnChange(this);">
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
			<option value="Zacatecas">Zacatecas</option>
		</select>

		<hr />

		<div id="sSinSucursal"></div>
		<div id="sChihuahua" style="display:none;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value=""></option>
				<option value="Administrativos">Administrativos</option>
				<option value="Almacén">Almacén</option>
				<option value="Auditoría">Auditoría</option>
				<option value="Cajas">Cajas</option>
				<option value="Calidad">Recursos Humanos</option>
				<option value="Caseta">Caseta</option>
				<option value="Cat">Cat</option>
				<option value="CEDIS">CEDIS</option>
				<option value="Compras">Compras</option>
				<option value="Contabilidad">Contabilidad</option>
				<option value="Crédito y Cobranza">Crédito y Cobranza</option>
				<option value="Desarrollo de Productos">Desarrollo de Productos</option>
				<option value="Diseño">Diseño y Mercadotecnia</option>
				<option value="Dirección">Dirección</option>
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
				<option value="Ventas Telemarketing">Ventas Telemarketing</option>
				<option value="Vigilancia">Vigilancia</option>
			</select>
			<hr />
		</div>
		<div id="sAguascalientes" style="display:none;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
			<hr />
		</div>
		<div id="sCuliácan" style="display:none;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
			<hr />
		</div>
		<div id="sCuliácan" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sDurango" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sEstado de México" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sGuadalajara" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sHermosillo" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sJuarez" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sLeón" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sMexicali" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sMonterrey" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sObregón" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sPuebla" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sQuerétaro" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sSaltillo" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sSan Luis Potosí" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sTijuana" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sTorreón" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sVeracruz" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
		<div id="sZacatecas" style="display:none;">
			<label for="mlDepartamento"></label>
			<br/>
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value="Todos">Todos</option>
			</select>
		</div>
	</form>

<!-- -->


<div id="dChihuahua" style="display:none;">
		<div id="dSinDepartamento"></div>
		
		<div id="dAdministrativos" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
	$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento =  'Administrativos' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
?>
			</select>
			</form>
		</div>

		<div id="dAlmacén" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
	$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento =  'Almacén' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
?>
			</select>
			</form>
		</div>

		<div id="dEquipo" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento = 'Equipo' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dAuditoría" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Auditoría' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCajas" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Cajas' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCalidad" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Calidad' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCaseta" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Caseta' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCat" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Cat' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCEDIS" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'CEDIS' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCompras" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Compras' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dContabilidad" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Contabilidad' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dCrédito y Cobranza" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Crédito y Cobranza' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dDesarrollo de Productos" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Desarrollo de Productos' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dDiseño" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Diseño' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dDirección" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Dirección' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dMercadotecnia" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Mercadotecnia' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dEquipo" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Equipo' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dKumasoftware" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Kumasoftware' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dMantenimiento" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Mantenimiento' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dMostrador" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Mostrador' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dReabastecimiento" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Reabastecimiento' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dServicio al Cliente" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Servicio al Cliente' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dSistemas" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Sistemas' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dSoporte Técnico" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Soporte Técnico' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dVentas Campo" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Ventas Campo' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dVentas Mostrador" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Ventas Mostrador' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dVentas Telemarketing" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Ventas Telemarketing' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>
		<div id="dVigilancia" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento =  'Vigilancia' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
		</div>


</div>
<!-- Termina: Chihuahua -->
	
		<div id="dAguascalientes" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result4 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Aguascalientes' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result4)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dCuliácan" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result5 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Culiácan' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result5)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>

		
		<div id="dDurango" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result6 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Durango' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result6)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
			<hr />
		</div>

		<div id="dEstado de México" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result6 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Estado de México' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result6)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dGuadalajara" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result7 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Guadalajara' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result7)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>

		<div id="dHermosillo" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result7 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Hermosillo' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result7)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dJuarez" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result8 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Juarez' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result8)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dLeón" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result9 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'León' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result9)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dMexicali" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result10 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Mexicali' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result10)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dMonterrey" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result11 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Monterrey' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result11)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dObregón" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result12 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Obregón' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result12)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dPuebla" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result13 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Puebla' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result13)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dQuerétaro" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result14 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Querétaro' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result14)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dSaltillo" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result15 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Saltillo' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result15)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dSan Luis Potosí" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result16 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'San Luis Potosí' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result16)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dTijuana" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result17 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Tijuana' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result17)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dTorreón" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result18 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Torreón' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result18)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>
		
		<div id="dVeracruz" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id="" onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result19 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Veracruz' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result19)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>


		<div id="dZacatecas" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result4 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Zacatecas' AND contra !=  'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result4)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
			</form>
			<hr />
		</div>




<h2>Buscar por Nombre</h2>

	<p>
		Seleccione el nombre del personal que desea actualizar.
	</p>

<div>
	<form action="model/mlpersonal.php" method="post">
		<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id="" onchange="this.form.submit();">
				<option value=""></option>
<?php	

	$result19 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE contra != 'baja' AND apellido1 != '0' AND apellido1 != '' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		
		while ($row3 = mysql_fetch_array($result19)) {
			if ($i > 0) { }
				echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		
		$i++;
?>				
			</select>
	</form>
	<hr />
</div>


<!--
		<div>
			<h2>Buscar por Nombre</h2>
			<form action="model/mlpersonal.php" method="post">
				<select name="" id="">
<option value=""></option>
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		#$result19 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE contra !=  'baja' OR llave !=  'vSistema' OR nombre1 != 'Fax' ORDER BY nombre1 ASC limit 0,1000");
		$result19 = mysql_query("SELECT id, nombre1, apellido1, llave, contra FROM appsdirecorio.atpempleados WHERE llave != 'vSistema' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result19)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."&nbsp;".$row3['apellido1']."</option>";
		}
		$i++;
	}
?>
			</select>
		</form>
		</div>
-->		
		<!-- Termina: Menú Lateral-->
</div>