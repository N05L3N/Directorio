<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	$id_url = 'actualizar';
	include('model/update.php');
	include('inc/head.php');
	include('inc/menu-superior.php');
	# Vistas
	include('view/actualizar.php');
	#include('view/actualizar.local.php');
	# Boilerplate
	include('view/theme/footer.php');
?>