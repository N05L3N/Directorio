<?php
  require('conf/conf.php');
  require('model/datos.php');

    if ($_POST["confirm"] == 'confirm') {
                  $id = $_POST["id"];
                  $nombre1 = $_POST["nombre1"];
                  $nombre2 = $_POST["nombre2"];
                  $apellido1 = $_POST["apellido1"];
                  $apellido2 = $_POST["apellido2"];
                  $num_empleado = $_POST["num_empleado"];
                  $imss = 'default';
                  $puesto = $_POST["puesto"];
                  $departamento = $_POST["departamento"];
                  $sucursal = $_POST["sucursal"];
                  $telefono = $_POST["telefono"];
                  $ext = $_POST["ext"];
                  $fecha_ingreso = '2000-07-30';
                  $fecha_baja = '2000-07-30';
                  $usuario = 'default';
                  $email = $_POST["email"];
                  $alias = $_POST["alias"];
                  $contra = 'default';
                  $llave = 'default';
                  $hora_captura = $horadecaptura;
                  $fecha_captura = $fechadecaptura;

                  #$sql = "UPDATE atpempleados SET id=2, nombre1=".$nombre1.", nombre2=".$nombre2.", apellido1=".$apellido1.", apellido2=".$apellido2.", num_empleado=".$num_empleado.", imss=".$imss.", puesto=".$puesto.", departamento=".$departamento.", sucursal=".$sucursal.", telefono=".$telefono.", ext=".$ext.", fecha_ingreso=".$fecha_ingreso.", fecha_baja=".$fecha_baja.", usuario=".$usuario.", email=".$email.", alias=".$alias.", contra=".$contra.", llave=".$llave.", hora_captura=".$hora_captura.", fecha_captura=".$fecha_captura." WHERE id=2";

                  #$sql = "UPDATE atpempleados SET nombre1=$nombre1 WHERE id=$id";
                  $sql = "UPDATE atpempleados SET contra='baja' WHERE id=$id";

                  #$sql = "UPDATE test SET id=1, nombre='Otro'; ";

                  mysql_query($sql, $conexion);
                  echo '<div id="info">
                  '.$nombre1.'&nbsp;'.$apellido1.' fue dado de baja satisfactoriamente.
                  <img src="img/Delete-icon.png" border="0" alt="" style="margin-left:5px; cursor:pointer;" onClick="infoClose()" />
                  </div>';
                  
    }

    else if ($_POST["confirm"] == 'alta') {
                  $id = $_POST["id"];
                  $nombre1 = $_POST["nombre1"];
                  $nombre2 = $_POST["nombre2"];
                  $apellido1 = $_POST["apellido1"];
                  $apellido2 = $_POST["apellido2"];
                  $num_empleado = $_POST["num_empleado"];
                  $imss = 'default';
                  $puesto = $_POST["puesto"];
                  $departamento = $_POST["departamento"];
                  $sucursal = $_POST["sucursal"];
                  $telefono = $_POST["telefono"];
                  $ext = $_POST["ext"];
                  $fecha_ingreso = '2000-07-30';
                  $fecha_baja = '2000-07-30';
                  $usuario = 'default';
                  $email = $_POST["email"];
                  $alias = $_POST["alias"];
                  $contra = 'default';
                  $llave = 'default';
                  $hora_captura = $horadecaptura;
                  $fecha_captura = $fechadecaptura;

                  $sql = "UPDATE atpempleados SET contra='alta' WHERE id=$id";

                  mysql_query($sql, $conexion);
                  echo '<div id="info">
                  '.$nombre1.'&nbsp;'.$apellido1.' fue dado de alta satisfactoriamente.
                  <img src="img/Delete-icon.png" border="0" alt="" style="margin-left:5px; cursor:pointer;" onClick="infoClose()" />
                  </div>';
                  
    }

    else {
    }
?>