<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	include('inc/head.login.php');
	# Vistas
	include('view/login.php');
	# Boilerplate
	include('view/theme/footer.php');
?>