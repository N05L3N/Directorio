<?php
session_start();
$mlpersonal = $_POST["mlpersonal"];
$_SESSION["mlpersonal"] = $mlpersonal;
header("Location: {$_SERVER['HTTP_REFERER']}".SID);
?>