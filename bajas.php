<?php 
	session_start();
	#$ruta = '../' ;
	#$error = $_SESSION["error"];
	$error = '';
	$id_url = 'bajas';
	include('model/m.bajas.php');
	include('inc/head.php');
	include('inc/menu-superior.php');
	# Vistas
	include('view/v.bajas.php');
	#include('view/actualizar.local.php');
	# Boilerplate
	include('view/theme/footer.php');
?>