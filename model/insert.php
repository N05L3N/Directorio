<?php
  require('conf/conf.php');
  require('model/datos.php');

    if (isset($_POST["nombre1"])) {
                  $id = 0;
                  $nombre1 = $_POST["nombre1"];
                  $nombre2 = $_POST["nombre2"];
                  $apellido1 = $_POST["apellido1"];
                  $apellido2 = $_POST["apellido2"];
                  $num_empleado = $_POST["num_empleado"];
                  $imss = $_POST["imss"];
                  $puesto = $_POST["puesto"];
                  $departamento = $_POST["departamento"];
                  $sucursal = $_POST["sucursal"];
                  $telefono = $_POST["telefono"];
                  $ext = $_POST["ext"];
                  $fecha_ingreso = $fechadecompra;
                  $fecha_baja = $_POST["fecha_baja"];
                  $usuario = $_POST["usuario"];
                  $email = $_POST["email"];
                  $alias = $_POST["alias"];
                  $contra = 'TEST';
                  $llave = 'TEST';
                  $hora_captura = $horadecaptura;
                  $fecha_captura = $fechadecaptura;

                  $sql = "INSERT INTO atpempleados (id, nombre1, nombre2, apellido1, apellido2, num_empleado, imss, puesto, departamento, sucursal, telefono, ext, fecha_ingreso, fecha_baja, usuario, email, alias, contra, llave, hora_captura, fecha_captura)";
                  $sql.= "VALUES ('".$id."','".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$num_empleado."','".$imss."','".$puesto."','".$departamento."','".$sucursal."','".$telefono."','".$ext."','".$fecha_ingreso."','".$fecha_baja."','".$usuario."','".$email."','".$alias."','".$contra."','".$llave."','".$hora_captura."','".$fecha_captura ."')";

                  mysql_query($sql, $conexion);
                  echo '<div id="info">
                  La información de '.$nombre1.'&nbsp;'.$apellido1.' fue agregada satisfactoriamente
                  <img src="img/Delete-icon.png" border="0" alt="" style="margin-left:5px; cursor:pointer;" onClick="infoClose()" />
                  </div>';
    }
?>