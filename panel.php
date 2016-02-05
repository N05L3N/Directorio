<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	include('inc/head.php');
	include('inc/menu-superior.php');
	# Vistas
	include('view/panel.php');
	# Boilerplate
	include('view/theme/footer.php');
?>