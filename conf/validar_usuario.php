<?php
session_start();
$user = $_POST["usuario"];
$password = $_POST["password"];

$variable = $user;
	switch($variable)
	{
		case 'mercadotecnia':
			if ($password == '454sasas') {
				$_SESSION["usu"] = $user;
				$_SESSION["llave"] = '3';
				header('location:../altas.php');
			}

			else if ($password == 'diseño') {
				$_SESSION["usu"] = $user;
				$_SESSION["llave"] = '3';
				header('location:../altas.php');
			}

			else  { 
				header('location:../index.php');
				$_SESSION["error"] = 'Contraseña incorrecta';
			}
		break;

		case 'direccion':
			if ($password == 'iudyd787') {
				$_SESSION["usu"] = $user;
				$_SESSION["llave"] = '3';
				header('location:../altas.php');
			}
			else  { 
				header('location:../index.php');
				$_SESSION["error"] = 'Contraseña incorrecta';
			}
		break;

		case 'calidad':
			if ($password == 'us875dr') {
				$_SESSION["usu"] = $user;
				$_SESSION["llave"] = '3';
				header('location:../altas.php');
			}
			else  { 
				header('location:../index.php');
				$_SESSION["error"] = 'Contraseña incorrecta';
			}
		break;

		default:
			header('location:../index.php');
			$_SESSION["error"] = 'Esta cuenta de usuario no existe.';
	}


?>