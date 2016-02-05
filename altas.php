<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	$id_url = 'altas';
	include('model/insert.php');
	include('inc/head.php');
	include('inc/menu-superior.php');
	# Vistas
	include('view/altas.php');
	# Boilerplate
	include('view/theme/footer.php');
?>