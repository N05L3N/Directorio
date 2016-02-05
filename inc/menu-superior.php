<nav id="menu-superior">
	<ul>
		<li><a href="http://avanceytec.com.mx/i/">Intranet</a></li>
<?php
	if ($id_url == 'altas') {
		echo '<li class="active"><a href="altas.php">Dar de alta personal</a></li>';
	}
	else {
		echo '<li><a href="altas.php">Dar de alta personal</a></li>';
	}

	if ($id_url == 'bajas') {
		echo '<li class="active"><a href="bajas.php">Dar de baja personal</a></li>';
	}
	else {
		echo '<li><a href="bajas.php">Dar de baja personal</a></li>';
	}

	if ($id_url == 'actualizar') {
		echo '<li class="active"><a href="actualizar.php">Actualizar Directorio</a></li>';
	}
	else {
		echo '<li><a href="actualizar.php">Actualizar Directorio</a></li>';
	}

	if ($id_url == 'consultas') {
		echo '<li class="active"><a href="consultas.php">Consultar</a></li>';
	}
	else {
		echo '<li><a href="consultas.php">Consultar</a></li>';
	}
		echo '<li><a href="exit.php">Cerrar Sesión</a></li>';
?>		
	</ul>
</nav>