<?php
	$conexion = mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M") or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db("appsdirecorio", $conexion);
	mysql_query ("SET NAMES 'utf8'");
?>