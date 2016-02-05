<?php
	session_start();
	$vendedor = $_SESSION["vendedor"];
	
	
if(!@mysql_connect("localhost", "jcnoble", "4tp2009jk")) {
	echo "<h2>".$TEXT['cds-error']."</h2>";
	die();
}

$where1 = "usuario = 'ventascampoaguascalientes' or usuario = 'ventascampoculiacan' or usuario = 'ventascampo3' or usuario = 'ventascampo4' or usuario = 'ventascampoaguascalientes' or usuario = 'ventascampochih1' or usuario = 'ventascampochih2' or usuario = 'ventascampoculiacan2' or usuario = 'ventascampohermosillo' or usuario = 'ventascampoleon' or usuario = 'ventascampomexicali' or usuario = 'ventascampoobregon' or usuario = 'ventascampoqueretaro' or usuario = 'ventascamposaltillo' or usuario = 'ventascamposlp' or usuario = 'ventascampotorreon2' or  usuario = 'ventascampotorreon3' or  usuario = 'ventaschihloc1' or  usuario = 'ventaschihloc2' or  usuario = 'ventaschihloc3' or usuario = 'ventaschihloc4' or usuario = 'ventaschihloc5' or usuario = 'ventascampotijuana' or usuario = 'ventascampomonterrey'";

	$iif = mysql_real_escape_string($_REQUEST['iif']);	
	$result = mysql_query("SELECT count(*) FROM jcnoble.contacto WHERE $where1");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}
			$total = $row['count(*)'];
		}
		$i++;
		
	$iif = mysql_real_escape_string($_REQUEST['iif']);	
	$result = mysql_query("SELECT count(*) FROM jcnoble.contacto WHERE usuario = 'ventascampoculiacan'");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}
			$total_01 = $row['count(*)'];
		}
		$i++;		
		
		$iif = mysql_real_escape_string($_REQUEST['iif']);	
	$result = mysql_query("SELECT count(*) FROM jcnoble.contacto WHERE usuario = 'ventascampoaguascalientes'");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}
			$total_02 = $row['count(*)'];
		}
		$i++;		
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="es" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Admin | Ventas Campo</title>
<!-- Foundation 4 -->
  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
  <link rel="stylesheet" href="foundation-icons/internal-style.css" />
  
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<h2>Panel de Administración</h2>
			<hr />
		</div>
	</div>

	<div class="row">
	
		<div class="large-4 columns">
			<h4>Herramientas</h4>
			<p>Seleccionar vendedor para ver estadisticas detalladas:</p>
<form action="sesiones/sesion.php" method="post">
<select name="vendedor" onChange="this.form.submit()">
	<option value="ventascampoculiacan">ventascampoculiacan</option>
	<option value="ventascampo3">ventascampo3</option>
	<option value="ventascampo4">ventascampo4</option>
	<option value="ventascampoaguascalientes">ventascampoaguascalientes</option>
	<option value="ventascampochih1">ventascampochih1</option>
	<option value="ventascampochih2">ventascampochih2</option>
	<option value="ventascampoculiacan2">ventascampoculiacan2</option>
	<option value="ventascampohermosillo">ventascampohermosillo</option>
	<option value="ventascampoleon">ventascampoleon</option>
	<option value="ventascampomexicali">ventascampomexicali</option>
	<option value="ventascampoobregon">ventascampoobregon</option>
	<option value="ventascampoqueretaro">ventascampoqueretaro</option>
	<option value="ventascamposaltillo">ventascamposaltillo</option>
	<option value="ventascamposlp">ventascamposlp</option>
	<option value="ventascampotorreon2">ventascampotorreon2</option>
	<option value="ventascampotorreon3">ventascampotorreon3</option>
	<option value="ventaschihloc1">ventaschihloc1</option>
	<option value="ventaschihloc2">ventaschihloc2</option>
	<option value="ventaschihloc3">ventaschihloc3</option>
	<option value="ventaschihloc4">ventaschihloc4</option>
	<option value="ventaschihloc5">ventaschihloc5</option>
	<option value="ventascampotijuana">ventascampotijuana</option>
	<option value="ventascampomonterrey">ventascampomonterrey</option>
	<option value="ventasveracruz">ventasveracruz</option>
	<option value="campoveracruz">campoveracruz</option>
</select>
</form>
			
			<h4>Detalles ventas campo</h4>
			<ul class="disc">
				<li><strong>Total de registros:</strong> (<?php echo $total; ?>)<br />
				</li>
<!--
				<li>ventascampoculiacan (<?php echo $total_01; ?>)</li>
<li>ventascampo3 (<?php echo $total_02; ?>)</li>
<li>ventascampo4 (<?php echo $total_03; ?>)</li>
<li>ventascampoaguascalientes (<?php echo $total_04; ?>)</li>
<li>ventascampochih1 (<?php echo $total_05; ?>)</li>
<li>ventascampochih2 (<?php echo $total_06; ?>)</li>
<li>ventascampoculiacan2 (<?php echo $total_07; ?>)</li>
<li>ventascampohermosillo (<?php echo $total_08; ?>)</li>
<li>ventascampoleon (<?php echo $total_09; ?>)</li>
<li>ventascampomexicali (<?php echo $total_10; ?>)</li>
<li>ventascampoobregon (<?php echo $total_11; ?>)</li>
<li>ventascampoqueretaro (<?php echo $total_12; ?>)</li>
<li>ventascamposaltillo (<?php echo $total_13; ?>)</li>
<li>ventascamposlp (<?php echo $total_14; ?>)</li>
<li>ventascampotorreon2 (<?php echo $total_15; ?>)</li>
<li>ventascampotorreon3 (<?php echo $total_16; ?>)</li>
<li>ventaschihloc1 (<?php echo $total_17; ?>)</li>
<li>ventaschihloc2 (<?php echo $total_18; ?>)</li>
<li>ventaschihloc3 (<?php echo $total_19; ?>)</li>
<li>ventaschihloc4 (<?php echo $total_20; ?>)</li>
<li>ventaschihloc5 (<?php echo $total_21; ?>)</li>
<li>ventascampotijuana (<?php echo $total_22; ?>)</li>
<li>ventascampomonterrey (<?php echo $total_23; ?>)</li>
-->
				
				<li><a href="dbdate.php">Descargar Base</a></li>
				
			</ul>
		</div>
	
		<div class="large-8 columns">
			<h3>Todos los registros de <?php echo $vendedor; ?></h3>

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div class="panel">
						<div class="glyph">
							<div class="preview-glyphs">
								<i class="step fi-address-book size-12"></i><i class="step fi-address-book size-72"></i>
							</div>
						</div>
	
<table cellpadding="0" cellspacing="0" width="100%" border="0">
<?php
	$iif = mysql_real_escape_string($_REQUEST['iif']);
	
	$result = mysql_query("SELECT * FROM jcnoble.contacto WHERE usuario = '$vendedor' ORDER BY id desc limit 0,20");
		
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}
			echo "<tr valign='middle'>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['nombre']."</td>";
		}
		echo "</tr>";
		$i++;
?>
</table>

					</div>
				</div>
			</div>
			
			<!--
			
			<div class="row">
				<div class="large-6 columns">
					<div class="panel">
					</div>
				</div>
				<div class="large-6 columns">
					<div class="panel">
						<p>Six columns</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
				<div class="large-4 columns">
					<div class="panel">
						<p>Four columns</p>
					</div>
				</div>
			</div>
			
			-->
			<!--
			<h3>Buttons</h3>

			<div class="row">
				<div class="large-6 columns">
					<p><a href="#" class="small button">Small Button</a></p>
					<p><a href="#" class="button">Medium Button</a></p>
					<p><a href="#" class="large button">Large Button</a></p>
				</div>
				<div class="large-6 columns">
					<p><a href="#" class="small alert button">Small Alert Button</a></p>
					<p><a href="#" class="success button">Medium Success Button</a></p>
					<p><a href="#" class="large secondary button">Large Secondary Button</a></p>
				</div>
			</div>
			-->
		</div>

	
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>