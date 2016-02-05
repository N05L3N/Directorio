<?php
session_start();

	if ($_SESSION["llave"] != '3') {
		header('Location: index.php');
	}

	else {
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/consultas.css">
	<link rel="stylesheet" href="css/menu-lateral.css">
	<link rel="stylesheet" href="css/menu-superior.css">
	<script src="js/modelodelequipo.js"></script>
	<script src="js/select.departamento.js"></script>
	<script src="js/verificador.js" type="text/javascript"></script>
	<script src="js/infoclose.js" type="text/javascript"></script>
</head>
<body>
	
<?php
	}
?>