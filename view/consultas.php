<?php
	
	if(!@mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M")) {
		die();
	}
	mysql_select_db("cdcol");
	mysql_query("SET NAMES 'utf8'"); 

?>
<div class="spacer"></div>
<?php include('inc/menu-lateral.consultas.php'); ?>
<div id="consultas-todos">
	<table cellspacing="0" cellpadding="0">
<?php
	if ($cconsultas_sucursal == '') {
		echo '<caption><h2>Sucursal Chihuahua</h2></caption>';
	}
	else {
		echo '<caption><h2>Sucursal '.$cconsultas_sucursal.'</h2></caption>';
	}
?>
		
		<tr>
			<th class="nombe">Nombres</th>
			<th class="ext">Ext</th>
			<th class="puesto">Puesto</th>
			<th class="correo">Correo</th>
		</tr>


<?php
	if ($cconsultas_sucursal == '') {

		if ($cconsultas_departamento == '') {

			$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND contra != 'baja' AND ext != ''  ORDER BY nombre1 ASC limit 0,1000");
	
			$i = 0;
			
			while ($row = mysql_fetch_array($result)) {
			
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
			$i++;

			include('model/mc.sucursales.php');

		}

		else {

			$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento = '$cconsultas_departamento' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
			$i = 0;
			
			while ($row = mysql_fetch_array($result)) {
			
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}


                    	include('model/consultas.indice.php');
			}
			$i++;

			#include('model/mc.sucursales.php');

		}

	}


	else if ($cconsultas_sucursal == 'Aguascalientes') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Chihuahua') {

			if ($cconsultas_departamento == '') {

			$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
			$i = 0;
			
			while ($row = mysql_fetch_array($result)) {
			
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
			$i++;

			include('model/mc.sucursales.php');

		}

		else {

			$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = 'Chihuahua' AND departamento = '$cconsultas_departamento' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
			$i = 0;
			
			while ($row = mysql_fetch_array($result)) {
			
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}


                    	include('model/consultas.indice.php');
			}
			$i++;

			#include('model/mc.sucursales.php');

		}

	}


	else if ($cconsultas_sucursal == 'Culiácan') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Durango') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Estado de México') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Guadalajara') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Hermosillo') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Juarez') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'León') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Mexicali') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Monterrey') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Obregón') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Puebla') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Querétaro') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Saltillo') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'San Luis Potosí') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Tijuana') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Torreón') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

	else if ($cconsultas_sucursal == 'Veracruz') {

	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE sucursal = '$cconsultas_sucursal' AND contra != 'baja' ORDER BY nombre1 ASC limit 0,1000");
	
	$i = 0;
		while ($row = mysql_fetch_array($result)) {
			if ($i > 0) {
				echo "<tr valign='bottom'>";
				echo "<td bgcolor='#ffffff' colspan='100' height='10'><hr></td>";
                        	echo "</tr>";
                    	}

                    	include('model/consultas.indice.php');
			}
		$i++;

	}

/**/

	else {
		echo '_';
	}
?>
	</table>



</div>

<div id="consultas-departamento">




<?php 
	if ($cconsultas_sucursal == 'Chihuahua' OR $cconsultas_sucursal == '') {


		if ($cconsultas_departamento == '') {

?>




<table cellspacing="0" cellpadding="0">
	<caption>
			<h2>ADMINISTRATIVOS</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Administrativos' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
			<h2>ALMACÉN 1098</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Almacén' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>AUDITORIA 1049</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Auditoria' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0" id="RH">
	<caption>
		<h2>RECURSOS HUMANOS 1044</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Calidad' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CASETA</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Caseta' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CAJAS</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Cajas' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CEDIS</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'CEDIS' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>Compras 1086</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Compras' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CONTABILIDAD 1091</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Contabilidad' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CREDITO 1047</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Crédito y Cobranza' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>DESARROLLO DE PRODUCTOS NUEVOS</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Desarrollo de Productos' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>DISEÑO / MERCADOTECNIA 1048 <br />Número Directo:	432 6153</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Diseno' OR departamento = 'Mercadotecnia' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>DIRECCIÓN <br /></h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Dirección' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
            ?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>KUMASOFTWARE Número Directo: 432 3529</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Kumasoftware' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>MOSTRADOR</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Mostrador' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
?>
</table>

<!--
<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>REABASTECIMIENTO 1046 <br />Número Directo: 432 6155</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
	$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Reabastecimiento' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
	include('model/consultas.mostrar.php');
?>
</table>
-->

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>SOPORTE TÉCNICO 1080</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Soporte Técnico' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>SISTEMAS 1090 Número Directo: 432 6157</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Sistemas' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>CAT 1050	Tel Directo 432 6100</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Cat' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>TELEMARKETING 1067	</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Telemarketing' OR departamento = 'Ventas Telemarketing' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>VENTAS CAMPO Número Directo: 432 6158</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Ventas Campo' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<table cellspacing="0" cellpadding="0">
	<caption>
		<h2>EQUIPO Número Directo:	432 6159</h2>
	</caption>
	<tr>
		<th class="nombe">Nombre</th>
		<th class="ext">Ext</th>
		<th class="puesto">Puesto</th>
		<th class="correo">Correo</th>
	</tr>
<?php	
$result = mysql_query("SELECT * FROM appsdirecorio.atpempleados WHERE departamento = 'Equipo' AND contra != 'baja' AND sucursal = 'Chihuahua' ORDER BY nombre1 ASC limit 0,1000");
include('model/consultas.mostrar.php');
?>
</table>

<?php
} # Termina la condicional para departamentos
		else {
			
		}
	} # Termina la condicional para Chihuahua
	else {

	}
?>
</div>