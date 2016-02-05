<?php
session_start();
$cconsultas_departamento = $_POST["cconsultas_departamento"];
$_SESSION["cconsultas_departamento"] = $cconsultas_departamento;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>