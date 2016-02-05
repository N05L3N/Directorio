<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	$id_url = 'consultas';
	include('inc/head.php');
	include('inc/menu-superior.php');
	# Vistas
	include('view/consultas.php');
	# Boilerplate
	include('view/theme/footer.php');
?>