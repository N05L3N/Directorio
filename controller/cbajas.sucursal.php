<?php
session_start();
$cbajas_sucursal = $_POST["cbajas_sucursal"];
$_SESSION["cbajas_sucursal"] = $cbajas_sucursal;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>