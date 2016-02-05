<?php
$conexion = mysql_connect("localhost", "uappsdirecorio", "Nq1q05LM840M") or trigger_error(mysql_error(),E_USER_ERROR); 
  mysql_select_db("appsdirecorio", $conexion);
  mysql_query ("SET NAMES 'utf8'");

$test = 'test';

    if ($test == 'test') {
                  $id = 1;
                  $nombre = 'Santiago';

                  $sql = "UPDATE test SET id=1, nombre='Santiago'; ";
                  #$sql.= "id=".$id.", 
                  #nombre=".$nombre."";

                  #$sql.= "WHERE id=".$id;

                  mysql_query($sql, $conexion);
                  echo 'Informacion actualizada con exito';
                  #include('inc/altas.php');
    }
    else {
      echo "Error";
}
?>
