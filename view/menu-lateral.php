<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		echo "<h2>".$TEXT['cds-error']."</h2>";
			die();
	}
	mysql_select_db("cdcol");

?>
<div id="nav-lateral">	

	<h2>Filtro</h2>

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

		<hr />

		<div id="sSinSucursal"></div>
		<div id="sChihuahua" style="display:none;">
			<label for="mlDepartamento">Departamento:</label>
			<br />
			<select name="mlDepartamento" id="" onchange="departamentoOnChange(this);">
				<option value=""></option>
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
				<!-- <option value="Mercadotecnia"></option> -->
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
	</form>

<!-- -->

	<form action="model/mlpersonal.php" method="post">
		<div id="dSinDepartamento"></div>
		<div id="dEquipo" style="display:none;">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
				<?php	
{
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento =  'Equipo' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
		}
		$i++;
	}
?>
			</select>
		</div>
	</form>

	
		<div id="dAguascalientes" style="display:none;">
			<form action="model/mlpersonal.php" method="post">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Aguascalientes' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Culiácan' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
			<hr />
		</d
		<form action="model/mlpersonal.php" method="post">
			iv>
		<div id="dDurango" style="display:none;">
			<label for="mlpersonal">Selecciona el Nombre:</label>
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Durango' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Hermosillo' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Juarez' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'León' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Mexicali' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Monterrey' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Obregón' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Puebla' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Querétaro' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Saltillo' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'San Luis Potosí' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Tijuana' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Torreón' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
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
			<select name="mlpersonal" id=""  onchange="this.form.submit();">
<?php	
 {
	$iif = mysql_real_escape_string($_REQUEST['iif']);

		$result3 = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal =  'Veracruz' ORDER BY nombre1 ASC limit 0,1000");

		$i = 0;
		while ($row3 = mysql_fetch_array($result3)) {
			if ($i > 0) { }
			echo "<option value=".$row3['id'].">".$row3['nombre1']."</option>";
		}
		$i++;
	}
?>				
			</select>
			</form>
			<hr />
		</div>

</div>