<?php

$y = date('y');
$m = date('m');
$d = date('d');
$h = date('h') + 1;
$i = date('i');
$s = date('s');

$fechadecaptura = ''.$y.'-'.$m.'-'.$d.'';
$horadecaptura = ''.$h.':'.$i.'';

$fechacompradia = $_POST["fechacompradia"];
$fechacomprames = $_POST["fechacomprames"];
$fechacompraano = $_POST["fechacompraano"];

$fechadecompra = ''.$fechacompraano.'-'.$fechacomprames.'-'.$fechacompradia.'';

?>