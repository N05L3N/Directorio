<?php
	if ($cbajas_sucursal == 'Chihuahua') {
	$cbajas_departamento = $_SESSION["cbajas_departamento"]; 
?>
	<div id="dChihuahua" style="display:block;">
		<form action="controller/cbajas.departamento.php" method="post">
			<label for="mlpersonal">Selecciona el Departmento:</label>
			<select name="cbajas_departamento" id="" onchange="this.form.submit();">
				<option value=""></option>
				<?php
	if ($cbajas_departamento == 'Almacén') {
		echo '<option value="Almacén" selected>Almacén</option>';
	}
	else {
		echo '<option value="Almacén">Almacén</option>';	
	}

	if ($cbajas_departamento == 'Administrativos') {
		echo '<option value="Administrativos" selected>Administrativos</option>';
	}
	else {
		echo '<option value="Administrativos">Administrativos</option>';	
	}

	if ($cbajas_departamento == 'Auditoría') {
		echo '<option value="Auditoría" selected>Auditoría</option>';
	}
	else {
		echo '<option value="Auditoría">Auditoría</option>';
	}

	if ($cbajas_departamento == 'Cajas') {
		echo '<option value="Cajas" selected>Cajas</option>';
	}
	else {
		echo '<option value="Cajas">Cajas</option>';
	}

	if ($cbajas_departamento == 'Calidad') {
		echo '<option value="Calidad" selected>Recursos Humanos</option>';
	}
	else {
		echo '<option value="Calidad">Recursos Humanos</option>';
	}

	if ($cbajas_departamento == 'Capacitación') {
		echo '<option value="Capacitación" selected>Capacitación</option>';
	}
	else {
		echo '<option value="Capacitación">Capacitación</option>';
	}

	if ($cbajas_departamento == 'Capacitación') {
		echo '<option value="Capacitación" selected>Capacitación</option>';
	}
	else {
		echo '<option value="Capacitación">Capacitación</option>';
	}

	if ($cbajas_departamento == 'Caseta') {
		echo '<option value="Caseta" selected>Caseta</option>';
	}
	else {
		echo '<option value="Caseta">Caseta</option>';
	}

	if ($cbajas_departamento == 'Cat') {
		echo '<option value="Cat" selected>Cat</option>';
	}
	else {
		echo '<option value="Cat">Cat</option>';
	}

	if ($cbajas_departamento == 'CEDIS') {
		echo '<option value="CEDIS" selected>CEDIS</option>';
	}
	else {
		echo '<option value="CEDIS">CEDIS</option>';
	}

	if ($cbajas_departamento == 'Compras') {
		echo '<option value="Compras" selected>Compras</option>';
	}
	else {
		echo '<option value="Compras">Compras</option>';
	}

	if ($cbajas_departamento == 'Contabilidad') {
		echo '<option value="Contabilidad" selected>Contabilidad</option>';
	}
	else {
		echo '<option value="Contabilidad">Contabilidad</option>';
	}

	if ($cbajas_departamento == 'Crédito y Cobranza') {
		echo '<option value="Crédito y Cobranza" selected>Crédito y Cobranza</option>';
	}
	else {
		echo '<option value="Crédito y Cobranza">Crédito y Cobranza</option>';
	}

	if ($cbajas_departamento == 'Desarrollo de Productos') {
		echo '<option value="Desarrollo de Productos" selected>Desarrollo de Productos</option>';
	}
	else {
		echo '<option value="Desarrollo de Productos">Desarrollo de Productos</option>';
	}

	if ($cbajas_departamento == 'Diseño') {
		echo '<option value="Diseño" selected>Diseño</option>';
	}
	else {
		echo '<option value="Diseño">Diseño</option>';
	}

	if ($cbajas_departamento == 'Dirección') {
		echo'<option value="Dirección" selected>Dirección</option>';
	}
	else {
		echo '<option value="Dirección">Dirección</option>';
	}

	if ($cbajas_departamento == 'Mercadotecnia') {
		echo '<option value="Mercadotecnia" selected>Mercadotecnia</option>';
	}
	else {
		echo '<option value="Mercadotecnia">Mercadotecnia</option>';
	}

	if ($cbajas_departamento == 'Equipo') {
		echo '<option value="Equipo" selected>Equipo</option>';
	}
	else {
		echo '<option value="Equipo">Equipo</option>';
	}

	if ($cbajas_departamento == 'Kumasoftware') {
		echo '<option value="Kumasoftware" selected>Kumasoftware</option>';
	}
	else {
		echo '<option value="Kumasoftware">Kumasoftware</option>';
	}

	if ($cbajas_departamento == 'Mantenimiento') {
		echo '<option value="Mantenimiento" selected>Mantenimiento</option>';
	}
	else {
		echo '<option value="Mantenimiento">Mantenimiento</option>';
	}

	if ($cbajas_departamento == 'Mostrador') {
		echo '<option value="Mostrador" selected>Mostrador</option>';
	}
	else {
		echo '<option value="Mostrador">Mostrador</option>';
	}
/*
	if ($cbajas_departamento == 'Reabastecimiento') {
		echo '<option value="Reabastecimiento" selected>Reabastecimiento</option>';
	}
	else {
		echo '<option value="Reabastecimiento">Reabastecimiento</option>';
	}
*/
	if ($cbajas_departamento == 'Servicio al Cliente') {
		echo '<option value="Servicio al Cliente" selected>Servicio al Cliente</option>';
	}
	else {
		echo '<option value="Servicio al Cliente">Servicio al Cliente</option>';
	}

	if ($cbajas_departamento == 'Sistemas') {
		echo '<option value="Sistemas" selected>Sistemas</option>';
	}
	else {
		echo '<option value="Sistemas">Sistemas</option>';
	}

	if ($cbajas_departamento == 'Soporte Técnico') {
		echo '<option value="Soporte Técnico" selected>Soporte Técnico</option>';
	}
	else {
		echo '<option value="Soporte Técnico">Soporte Técnico</option>';
	}

	if ($cbajas_departamento == 'Ventas Campo') {
		echo '<option value="Ventas Campo" selected>Ventas Campo</option>';
	}
	else {
		echo '<option value="Ventas Campo ">Ventas Campo</option>';
	}

	if ($cbajas_departamento == 'Ventas Telemarketing') {
		echo '<option value="Ventas Telemarketing" selected>Ventas Telemarketing</option>';
	}
	else {
		echo '<option value="Ventas Telemarketing">Ventas Telemarketing</option>';
	}

	if ($cbajas_departamento == 'Vigilancia') {
		echo '<option value="Vigilancia" selected>Vigilancia</option>';
	}
	else {
		echo '<option value="Vigilancia">Vigilancia</option>';
	}
?>
			</select>
		</form>
	</div>			
<?php
	}
	else {

	}

?>