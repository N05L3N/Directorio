<?php
session_start();
$cconsultas_sucursal = $_POST["cconsultas_sucursal"];
$_SESSION["cconsultas_sucursal"] = $cconsultas_sucursal;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>