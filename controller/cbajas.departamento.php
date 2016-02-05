<?php
session_start();
$cbajas_departamento = $_POST["cbajas_departamento"];
$_SESSION["cbajas_departamento"] = $cbajas_departamento;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>