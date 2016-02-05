<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		echo "<h2>".$TEXT['cds-error']."</h2>";
			die();
	}
	mysql_select_db("cdcol");

?>
<div id="nav-lateral">	

	<h2>Buscar por:</h2>
	
<?php 
	$cconsultas_sucursal = $_SESSION["cconsultas_sucursal"]; 
?>
	
	<form action="controller/cconsultas.sucursal.php" method="post">
		<label for="cconsultas_sucursal">Sucursal:</label>
		<br />
		<select name="cconsultas_sucursal" id="" onchange="this.form.submit();">
			<option value="">Ver Todas</option>
<?php
	if ($cconsultas_sucursal == 'Aguascalientes') {
		echo '<option value="Aguascalientes" selected>Aguascalientes</option>';
	}
	else {
		echo '<option value="Aguascalientes">Aguascalientes</option>';	
	}

	if ($cconsultas_sucursal == 'Chihuahua') {
		echo '<option value="Chihuahua" selected>Chihuahua</option>';
	}
	else {
		echo '<option value="Chihuahua">Chihuahua</option>';	
	}

	if ($cconsultas_sucursal == 'Culiácan') {
		echo '<option value="Culiácan" selected>Culiácan</option>';
	}
	else {
		echo '<option value="Culiácan">Culiácan</option>';	
	}

	if ($cconsultas_sucursal == 'Durango') {
		echo '<option value="Durango" selected>Durango</option>';
	}
	else {
		echo '<option value="Durango">Durango</option>';	
	}

	if ($cconsultas_sucursal == 'Estado de México') {
		echo '<option value="Estado de México" selected>Estado de México</option>';
	}
	else {
		echo '<option value="Estado de México">Estado de México</option>';	
	}

	if ($cconsultas_sucursal == 'Guadalajara') {
		echo '<option value="Guadalajara" selected>Guadalajara</option>';
	}
	else {
		echo '<option value="Guadalajara">Guadalajara</option>';	
	}

	if ($cconsultas_sucursal == 'Hermosillo') {
		echo '<option value="Hermosillo" selected>Hermosillo</option>';
	}
	else {
		echo '<option value="Hermosillo">Hermosillo</option>';	
	}

	if ($cconsultas_sucursal == 'Juarez') {
		echo '<option value="Juarez" selected>Juarez</option>';
	}
	else {
		echo '<option value="Juarez">Juarez</option>';	
	}

	if ($cconsultas_sucursal == 'León') {
		echo '<option value="León" selected>León</option>';
	}
	else {
		echo '<option value="León">León</option>';	
	}

	if ($cconsultas_sucursal == 'Mexicali') {
		echo '<option value="Mexicali" selected>Mexicali</option>';
	}
	else {
		echo '<option value="Mexicali">Mexicali</option>';	
	}

	if ($cconsultas_sucursal == 'Monterrey') {
		echo '<option value="Monterrey" selected>Monterrey</option>';
	}
	else {
		echo '<option value="Monterrey">Monterrey</option>';
	}

	if ($cconsultas_sucursal == 'Obregón') {
		echo '<option value="Obregón" selected>Obregón</option>';
	}
	else {
		echo '<option value="Obregón">Obregón</option>';	
	}

	if ($cconsultas_sucursal == 'Puebla') {
		echo '<option value="Puebla" selected>Puebla</option>';
	}
	else {
		echo '<option value="Puebla">Puebla</option>';	
	}

	if ($cconsultas_sucursal == 'Querétaro') {
		echo '<option value="Querétaro" selected>Querétaro</option>';
	}
	else {
		echo '<option value="Querétaro">Querétaro</option>';	
	}

	if ($cconsultas_sucursal == 'Saltillo') {
		echo '<option value="Saltillo" selected>Saltillo</option>';
	}
	else {
		echo '<option value="Saltillo">Saltillo</option>';	
	}

	if ($cconsultas_sucursal == 'San Luis Potosí') {
		echo '<option value="San Luis Potosí" selected>San Luis Potosí</option>';
	}
	else {
		echo '<option value="San Luis Potosí">San Luis Potosí</option>';	
	}

	if ($cconsultas_sucursal == 'Tijuana') {
		echo '<option value="Tijuana" selected>Tijuana</option>';
	}
	else {
		echo '<option value="Tijuana">Tijuana</option>';	
	}

	if ($cconsultas_sucursal == 'Torreón') {
		echo '<option value="Torreón" selected>Torreón</option>';
	}
	else {
		echo '<option value="Torreón">Torreón</option>';	
	}

	if ($cconsultas_sucursal == 'Veracruz') {
		echo '<option value="Veracruz" selected>Veracruz</option>';
	}
	else {
		echo '<option value="Veracruz">Veracruz</option>';	
	}

?>
		</select>
	</form>

<br />

<?php 
	$cconsultas_departamento = $_SESSION["cconsultas_departamento"]; 
?>
	
	<form action="controller/cconsultas.departamento.php" method="post">
		<label for="cconsultas_departamento">Departamento:</label>
		<br />
		<select name="cconsultas_departamento" id="" onchange="this.form.submit();">
			<option value="">Ver Todos</option>
<?php
	include('model/mc.departamentos.php');
?>			
		</select>
	</form>

<!-- Termina: Menú Lateral-->

</div>