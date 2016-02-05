<div class="spacer"></div>
<div id="login">
<h1 id="bienvenida">Directorio de personal</h1>
	<form action="conf/validar_usuario.php" method="post">
		<table>
			<tr>
				<td>
					<label for="usuario">Usuario:</label>
				</td>
				<td>
					<input type="text" value="" id="campo" name="usuario" style="border:yes" size="40" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Contraseña:</label>
				</td>
				<td>
					<input type="password" value="" id="campo" name="password"  style="border:yes" size="40" />
					<div style="color:#ff0000; font-family:calibri;"><?php echo ''.$error.'';?></div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" id="boton" name="submitButtonName" value="Iniciar Sesión">	
				</td>
			</tr>
		</table>
	</form>
</div>