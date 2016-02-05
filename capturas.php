<?php
session_start();
	if( $_SESSION["llave"] == '737648436l' )
		{
			if( $_SESSION["usu"] == 'local')
				{
					$l = 'http://192.168.0.59:81/avanceytec.com.mx/';
					$usuario = 'prueba';
				}
			else
				{
					$l = 'http://avanceytec.mx/';
					$usuario = $_SESSION["usu"];
				}
			
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link type="text/css" href="view/bootstrap/css/bootstrap.css" rel="stylesheet" />
</head>
<body style="margin-left:0px; margin-top:0px;">

<br /><br /><br />

<?php
$where1 = "usuario = '$usuario'";
$iif = mysql_real_escape_string($_REQUEST['iif']);	
	#$result = mysql_query("SELECT count(*) FROM jcnoble.contacto WHERE $where1 and fecha = '2013-09-09'");
	$result = mysql_query("SELECT count(*) FROM jcnoble.contacto WHERE usuario = 'mgarza'");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) {}
			$total = $row['count(*)'];
		}
		$i++;
?>

<div class="row">
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge"><?php echo ''.$total.'';?></span>
<h1>    Capturas</h1>
  </li>
</ul>
</div>


<!-- Select -->
<?php
if(!@mysql_connect("localhost", "jcnoble", "4tp2009jk")) { die(); } 
?>
<table cellpadding="2" cellspacing="2" width="95%" border="1" class="table table-hover table-condensed">
	<thead style="background-color:#0461b3; color:white; height:50px; width:100%;">
	<tr>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>Ciudad</th>
		<th>pais</th>
		<th>Estado</th>
		<th>Teléfono</th>
		<th>Email</th>
		<th>Medio</th>
		<th>Giro</th>
		<th>Comentarios</th>
		<th>Fecha</th>
		<th>Equipodeinteres</th>
	</tr>
	</thead>
<?php			
	$iif = mysql_real_escape_string($_REQUEST['iif']);
	$result = mysql_query("SELECT * FROM jcnoble.contacto WHERE usuario = '$usuario' ORDER BY id desc limit 0,100");
	$i = 0;
	while ($row = mysql_fetch_array($result)) {
		if ($i > 0) { }
		echo "<tr valign='middle'>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['direccion']."</td>";
		echo "<td>".$row['ciudad']."</td>";
		echo "<td>".$row['pais']."</td>";
		echo "<td>".$row['estado']."</td>";
		echo "<td>(".$row['lada'].") ".$row['telefono']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['medio']."</td>";
		echo "<td>".$row['giro']."</td>";
		echo "<td>".$row['comentarios']."</td>";
		echo "<td>".$row['fecha']."</td>";
		echo "<td>".$row['equipodeinteres']."</td>";
	}
		echo "</tr>";
	$i++;
?>
	<tfoot style="background-color:#0461b3; color:white; height:50px; width:100%;">
	<tr>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>Ciudad</th>
		<th>pais</th>
		<th>Estado</th>
		<th>Teléfono</th>
		<th>Email</th>
		<th>Medio</th>
		<th>Giro</th>
		<th>Comentarios</th>
		<th>Fecha</th>
		<th>Equipodeinteres</th>
	</tr>
	</tfoot>
</table>
<!-- select-->

<?php
}
else
{
include('index.php');
}
?>